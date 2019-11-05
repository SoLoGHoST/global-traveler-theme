<?php

defined('ABSPATH') || exit;

global $post, $page_id, $global_site, $wpdb;

$hero_type = get_field('hero_type');

$post_id = $post->ID;
$excluded_categories = array();

$posts_group_id = $wpdb->get_var('SELECT term_id FROM ' . $wpdb->terms . ' WHERE name = "Single Post Group" OR slug = "single-post-group" LIMIT 1');
$posts_group_id2 = $wpdb->get_var('SELECT term_id FROM ' . $wpdb->terms . ' WHERE name = "Single Post Group 2" OR slug = "single-post-group-2" LIMIT 1');

if (function_exists('get_ad_group')) {
	$the_ad = !empty($posts_group_id) && group_has_ads($posts_group_id) ? get_ad_group((int) $posts_group_id) : '';
	$the_ad2 = !empty($posts_group_id2) && group_has_ads($posts_group_id2) ? get_ad_group((int) $posts_group_id2) : '';
} ?>

<div id="content">
	<?php if (!isset($page_content)): ?>
	<div class="container-fluid">
		<div id="posts-section" class="section content<?php echo !empty($hero_type) && $hero_type == 'alternative' ? ' my-0' : ''; ?>">
			<?php
			if (!empty($excursion_page)):
				$tags = get_terms(array('taxonomy' => 'excursions_tag_type', 'hide_empty' => false)); ?>
				<div class="tags d-none d-sm-block py-3 col-22 offset-1">
					<?php
					if (!empty($tags)) : ?>
					<ul class="list-inline text-center">
						<?php foreach ($tags as $tag) : ?>
						<li class="list-inline-item p-2">
							<a href="<?php echo get_term_link($tag->term_id); ?>" class="btn btn-primary"><?php echo $tag->name; ?></a>
						</li>
						<?php endforeach; ?>
					</ul>
					<?php
					endif; ?>
				</div>
				<div class="tags-mobile d-block d-sm-none pt-3 mx-4 px-1">
					<?php
					if (!empty($tags)) : ?>
					<select class="select-excursion-tag w-100 mt-3">
						<option value="" disabled selected>Select tag</option>
						<?php foreach ($tags as $tag) : ?>
						<option value="<?php echo get_term_link($tag->term_id); ?>"><?php echo $tag->name; ?></option>
						<?php endforeach; ?>
					</select>
					<?php endif; ?>
				</div>
			<?php
			endif; ?>
			<div class="single-wrapper no-pad row">
				<div id="body-content" class="col-22 offset-1 col-sm-17 offset-sm-0 py-2<?php echo !empty($excursion_page) ? ' my-sm-4' : ' my-sm-5'; ?> px-3 px-md-5">
					<?php
					if (!empty($hero_type) && $hero_type == 'alternative'):
						$author_name = get_field('post_author', $post_id);
						$date = get_the_date('M j, Y', $post_id); ?>
						<h1 class="title my-3">
						  <span><span class="text"><?php echo get_the_title($post_id); ?></span></span>
						</h1>
						<?php if (!empty($author_name)): ?>
						<p>by <?php echo $author_name; ?></p>
						<?php endif; ?>
						<span class="date mb-5"><?php echo $date; ?></span>
					<?php
					endif; ?>
					<?php
					if (!empty($excursion_page)): ?>
					<h3 class="mb-4"><?php echo apply_filters('the_title', 'FX Excursions: ' . $excursion_page['title']); ?></h3>
					<?php
					endif;
					if (empty($content_replace)):
					the_content();
					else:
						// tif_get_template('inc/' . $global_site . '/content-tags.php', array('term' => $content_replace['category']));
						tif_get_template('inc/' . $global_site . '/content-replace.php', array('global_site' => $global_site, 'cat_id' => $content_replace['cat_id'], 'category' => $content_replace['category']));
					endif; ?>
					<?php
					if (!empty($excursion_page)): ?>
					<div id="excursions-wrapper" class="row">
						<?php
						// Get all excursions for the current category to be outputted, no need for pagination here...
						$excursion_args = array(
						    'post_type' => 'excursions',
						    'orderby' => 'date',
						    'order' => 'desc', // not sure how we want these outputted, descending order by date is what we have here
							'post_status' => 'publish',
						    'posts_per_page' => -1,
						    'tax_query' => array(
						        array(
						            'taxonomy' => 'excursions_category_type',
						            'field' => 'slug',
						            'terms' => $excursion_page['slug'] // the page slug matches the category slug, AWESOME!
						        )
						    )
						);

						$excursions_query = new WP_Query($excursion_args);

						if (!empty($excursions_query->posts)): ?>

						<?php
							$chunked_excursions = array_chunk($excursions_query->posts, 3);

							foreach($chunked_excursions as $chunked_excursion):
								tif_get_template('inc/' . $global_site . '/3posts-template.php', array('post_data' => $chunked_excursion, 'excursion_page' => $excursion_page, 'custom_category' => 'excursions_category_type'));
							endforeach; ?>
						<?php
						else: ?>
						<p>Sorry, No Excursions exist.</p>
						<?php
						endif; ?>
					</div>
					<?php
					endif; ?>
				</div>
				<div class="sidebar col-22 offset-1 col-sm-7 offset-sm-0 py-2<?php echo !empty($excursion_page) ? ' my-sm-4' : ' my-sm-5'; ?> order-first order-sm-last">
					<?php
					if (!empty($the_ad)): ?>
					<div class="ad px-md-5 py-3 d-none d-sm-flex justify-content-center">
						<?php
						echo $the_ad; ?>
					</div>
					<?php
					endif;
					if ($global_site == 'globalusa'): ?>
					<div class="newsletter px-md-5 pt-3 d-sm-flex justify-content-center">
						<?php echo do_shortcode('[gravityform id=15 title=true description=true ajax=true]'); ?>
					</div>
					<?php
					endif;
					if (!empty($the_ad2)): ?>
					<div class="ad px-md-5 py-3 d-none d-sm-flex justify-content-center">
						<?php
						echo $the_ad2; ?>
					</div>
					<?php
					endif; ?>
				</div>

			</div>
			<?php
			$cta = array(
				'cta_image' => get_field('cta_image'),
				'cta_headline' => get_field('cta_headline'),
				'cta_buttonurl' => get_field('cta_buttonurl'),
				'cta_buttontext' => get_field('cta_buttontext')
			);

			// remove empty values from the array...
			$cta = array_filter($cta);

			if (!empty($excursion_page))
				$cta['wrapper_classes'] = 'pb-5';

			if (!empty($cta)):
				tif_get_template('inc/' . $global_site . '/call-to-action.php', $cta);
			endif; ?>
		</div>
	</div>
	<?php endif; ?>
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

	$has_more = false;
	$ordered_array = array();
	$posts_per_page = 6;
	$args = array(
		'post_type' => 'post',
		'orderby' => 'date',
		'post_status' => 'publish',
		'offset' => 0,
		'posts_per_page' => ($posts_per_page - $total_sponsored)
	);

	if (!empty($excluded_categories))
		$args = array_merge($args, array('category__not_in' => $excluded_categories));
	else
		$args = array_merge($args, array('post__not_in' => array($post_id)));

	if (!empty($sponsored_ids))
	{
		if (!empty($args['post__not_in']))
			$args['post__not_in'] = array_merge($args['post__not_in'], $sponsored_ids);
		else
			$args['post__not_in'] = $sponsored_ids;
	}

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

	tif_get_template('inc/' . $global_site . '/base-template.php', array('global_site' => $global_site, 'excluded_categories' => $excluded_categories, 'wrapper_start' => array('<div class="container-fluid mt-5 pt-5 px-0">', '<div class="section content">'), 'wrapper_end' => array('</div>', '</div>'), 'offset' => ($posts_per_page - $total_sponsored), 'sponsors_shown' => $exclude_sponsored_ids, 'initial_posts' => $initial_posts)); ?>
</div>
