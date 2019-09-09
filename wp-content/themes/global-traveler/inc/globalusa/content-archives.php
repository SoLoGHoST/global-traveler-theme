<?php

defined('ABSPATH') || exit;

// content-archives.php
// description:  shows the body copy for archive pages of deals currently...
// variable included = $post_type (the post type of the archive)

global $post, $page_id, $global_site, $wpdb;

$posts_group_id = $wpdb->get_var('SELECT term_id FROM ' . $wpdb->terms . ' WHERE name = "Single Post Group" OR slug = "single-post-group" LIMIT 1');
$posts_group_id2 = $wpdb->get_var('SELECT term_id FROM ' . $wpdb->terms . ' WHERE name = "Single Post Group 2" OR slug = "single-post-group-2" LIMIT 1');

if (function_exists('get_ad_group')) {
	$the_ad = !empty($posts_group_id) && group_has_ads($posts_group_id) ? get_ad_group((int) $posts_group_id) : '';
	$the_ad2 = !empty($posts_group_id2) && group_has_ads($posts_group_id2) ? get_ad_group((int) $posts_group_id2) : '';
} 

$archive_posts_per_page = 9;
$has_more_archive_posts = false;
?>

<div id="content">
	<div class="container-fluid no-pad">
		<div id="posts-section" class="section content">
			<div class="single-wrapper no-pad row">
				<div id="body-content" class="col-22 offset-1 col-sm-17 offset-sm-0 py-2  my-sm-4 px-3 px-md-5">

					<div id="archive-posts-wrapper" class="row">
						<?php
						// Get all excursions for the current category to be outputted, no need for pagination here... 
						$archive_args = array(
						    'post_type' => $post_type,
						    'orderby' => 'date',
						    'order' => 'desc', // not sure how we want these outputted, descending order by date is what we have here
							'post_status' => 'publish',
						    'posts_per_page' => $archive_posts_per_page + 1
						);

						$archive_query = new WP_Query($archive_args); 

						if (!empty($archive_query->posts)): 

							$total_posts = count($archive_query->posts);

							if ($total_posts > ($archive_posts_per_page)) {
								array_pop($archive_query->posts);
								$has_more_archive_posts = true;
							}

							$chunked_archives = array_chunk($archive_query->posts, 3);

							foreach($chunked_archives as $chunked_archive):

								$template_args = array(
									'post_data' => $chunked_archive,
									'post_item_class' => 'archive-post',
									'excursion_page' => true
								);

								if (!empty($custom_category))
									$template_args['custom_category'] = $custom_category;

								tif_get_template('inc/' . $global_site . '/3posts-template.php', $template_args);
							endforeach; ?>
						<?php
						else: 
							$queried_object = get_queried_object();
							if (!empty($queried_object)):
								$labels = get_post_type_labels($queried_object); 
							endif; ?>
						<p>Sorry, No <?php echo $labels->name; ?> currently exist.</p>
						<?php
						endif; ?>
						<script>
						var noMoreArchivePostsLeft = <?php echo !empty($has_more_archive_posts) ? 'false' : 'true'; ?>;
						var archivePostType = '<?php echo get_post_type(); ?>';
						var archivePostsPerPage = <?php echo $archive_posts_per_page; ?>;
						var customCategory = '<?php echo !empty($custom_category) ? $custom_category : ''; ?>';
						</script>
					</div>
				</div>
				<div class="sidebar col-22 offset-1 col-sm-7 offset-sm-0 py-2 my-sm-4 order-first order-sm-last">
					<?php
					if (!empty($the_ad)): ?>
					<div class="ad px-md-5 py-3 d-none d-sm-flex justify-content-center">
						<?php 
							echo $the_ad; ?>
					</div>
					<?php
					endif; ?>
					<div class="newsletter px-md-5 pt-3 d-sm-flex justify-content-center">
						<?php
							echo do_shortcode('[gravityform id=15 title=true description=true ajax=true]'); ?>
					</div>
					<?php
					if (!empty($the_ad2)): ?>
					<div class="ad px-md-5 py-3 d-none d-sm-flex justify-content-center">
						<?php
						echo $the_ad2; ?>
					</div>
					<?php
					endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php
	tif_get_template('inc/instagram-feed.php', array()); 

	$sponsored_posts = $current_sponsored = $initial_posts = array();
	$total_sponsored = 0;
	$exclude_sponsored_ids = array();
	$sponsored_ids = array();

	$sponsored_posts = apply_filters('get_sponsored_posts', array(), array());

	if (!empty($sponsored_posts))
	{
		shuffle($sponsored_posts);

		foreach($sponsored_posts as $sponsored)
			$sponsored_ids[] = $sponsored->ID;

		// get 2 sponsors...
		$current_sponsored = array_splice($sponsored_posts, 0, 2);

		if (!empty($current_sponsored))
		{
			foreach($current_sponsored as $sponsor)
			{
				$exclude_sponsored_ids[] = $sponsor->ID;
				$total_sponsored++;
			}
		}
	}

	$ordered_array = array();
	$posts_per_page = 6;
	$args = array(
		'post_type' => 'post',
		'orderby' => 'date',
		'post_status' => 'publish',
		'offset' => 0,
		'posts_per_page' => ($posts_per_page - $total_sponsored)
	);

	if (!empty($sponsored_ids))
		$args['post__not_in'] = $sponsored_ids;

	$the_query = new WP_Query($args);

	if (!empty($the_query->posts))
	{
		$total_posts = count($the_query->posts);
		$half_sponsored = !empty($total_sponsored) ? ceil(1 / $total_sponsored) : 0;

		$order_pattern = array(
			'first_set' => (3 - $half_sponsored),
			'last_set' => (3 - ($total_sponsored - $half_sponsored))
		);

		foreach($order_pattern as $key => $value)
		{
			if (!empty($the_query->posts))
				$ordered_array[$key] = array_splice($the_query->posts, 0, $value);

			if (!empty($ordered_array[$key]) && !empty($current_sponsored))
				$ordered_array[$key] = array_merge(array_slice($ordered_array[$key], 0, 1), array_splice($current_sponsored, 0, 1), array_slice($ordered_array[$key], 1));
		}
	}

	ob_start();
	tif_get_template('inc/' . $global_site . '/3posts-template.php', array('post_data' => $ordered_array['first_set']));
	$initial_posts[] = ob_get_clean();

	ob_start();
	tif_get_template('inc/' . $global_site . '/3posts-template.php', array('post_data' => $ordered_array['last_set']));
	$initial_posts[] = ob_get_clean();

	tif_get_template('inc/' . $global_site . '/base-template.php', array('global_site' => $global_site, 'wrapper_start' => array('<div class="container-fluid mt-5 pt-5 px-0">', '<div class="section content">'), 'wrapper_end' => array('</div>', '</div>'), 'offset' => ($posts_per_page - $total_sponsored), 'sponsors_shown' => $exclude_sponsored_ids, 'initial_posts' => $initial_posts)); ?>
</div>