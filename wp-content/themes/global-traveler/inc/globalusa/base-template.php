<?php

if (!defined('ABSPATH')) exit;
global $post, $page_id, $homepage_id, $global_site, $wpdb;

// Get all sponsored posts...
$sponsored_posts = $random_sponsors = $random_category_sponsored = $current_sponsored = array();

$total_sponsored = 0;
$exclude_sponsored_ids = array();
$sponsored_ids = array();

$sponsored_posts = apply_filters('get_sponsored_posts', array(), !empty($sponsors_shown) ? $sponsors_shown : array());

$sponsored_category_posts = array();

if (!empty($sponsored_posts))
{
	// Randomly shuffle the posts...
	shuffle($sponsored_posts);

	foreach($sponsored_posts as $sponsored_key => $sponsored)
	{
		$sponsored_ids[] = $sponsored->ID;

		if (!empty($cat_id)) {
			// Prioritize the sponsored category posts over all others, if we have a category id
			if (has_category($cat_id, $sponsored))
			{
				if (!empty($sponsored_category_posts))
					$sponsored_category_posts = array_merge($sponsored_category_posts, array_splice($sponsored_posts, $sponsored_key, 1));
				else
					$sponsored_category_posts = array_splice($sponsored_posts, $sponsored_key, 1);
			}
		}
	}

	// Grab up to 2 sponsored_category_posts...
	if (!empty($sponsored_category_posts))
	{
		$random_category_sponsored = array_splice($sponsored_category_posts, 0, 1);

		if (!empty($random_category_sponsored))
		{
			foreach($random_category_sponsored as $random_post)
			{
				$exclude_sponsored_ids[] = $random_post->ID;
				$total_sponsored++;
			}
		}
	}

	// If no sponsored category posts are found, get a regular sponsor that is not from the category...
	if (empty($total_sponsored))
	{
		$random_sponsors = array_splice($sponsored_posts, 0, 1);

		if (!empty($random_sponsors))
		{
			foreach($random_sponsors as $random_post)
			{
				$exclude_sponsored_ids[] = $random_post->ID;
				$total_sponsored++;
			}
		}
	}

	// the current sponsored posts to be shown...
	$current_sponsored = array_merge($random_category_sponsored, $random_sponsors);
}

// Now get the Ads...
$has_ads = false;
$the_ads = array();
$posts_group_id = $wpdb->get_var('SELECT term_id FROM ' . $wpdb->terms . ' WHERE name = "6 posts Ad Group" OR slug = "6-posts-ad-group" LIMIT 1');

if (!empty($posts_group_id) && function_exists('get_ad_group') && group_has_ads($posts_group_id))
{
	$has_ads = true;
	$the_ads[] = get_ad_group($posts_group_id);
	$the_ads[] = get_ad_group($posts_group_id);
}

$has_more = false;
$ordered_array = array();
$posts_per_page = !empty($the_ads) ? 11 : 10;

$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'post_status' => 'publish',
	'offset' => !empty($offset) ? (int) $offset : 0, // setting the initial offset, if defined...
	'posts_per_page' => $posts_per_page - $total_sponsored
);

if (!empty($cat_id)) {
	$args['cat'] = $cat_id;
}

if (is_singular('post')) {
	if (!empty($excluded_categories))
		$args = array_merge($args, array('category__not_in' => $excluded_categories));
	else
		$args = array_merge($args, array('post__not_in' => array($post->ID)));
}

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

	if ($total_posts > (($posts_per_page - $total_sponsored) - 1))
	{
		array_pop($the_query->posts);
		$has_more = true;
	}

	$order_pattern = array(
		'first_set' => !empty($the_ads) ? 5 : 6,
		'last_set' => (3 - $total_sponsored)
	);

	foreach($order_pattern as $key => $value)
	{
		if (!empty($the_query->posts))
		{
			$ordered_array[$key] = array_splice($the_query->posts, 0, $value);

			if ($key == 'first_set' && !empty($ordered_array[$key]) && !empty($the_ads))
			{
				$random_ad = count($the_ads) > 1 ? array_rand($the_ads, 1) : 0;

				$rAD[$key][] = (object) [
					'ad_type' => 'basic',
					'output' => array_splice($the_ads, $random_ad, 1)
				];

				$ordered_array[$key] = array_merge(array_slice($ordered_array[$key], 0, 2), $rAD[$key], array_slice($ordered_array[$key], 2));
			}

			if ($key == 'last_set' && !empty($ordered_array[$key]) && !empty($current_sponsored)) {
					$ordered_array[$key] = array_merge(array_slice($ordered_array[$key], 0, 1), array_splice($current_sponsored, 0, 1), array_slice($ordered_array[$key], 1));
			}
		}
	}
} ?>

<?php 
if (!empty($wrapper_start)):
	echo implode('', $wrapper_start);
else: ?>
<div id="content" class="container-fluid no-pad my-2">
	<div id="posts-section" class="section content">
<?php
endif; ?>
	<?php 
	if (!empty($initial_posts) || !empty($ordered_array)):
		if (!empty($initial_posts)):
			foreach($initial_posts as $initial_post_group):
				echo $initial_post_group;
			endforeach;
		endif;
		if (!empty($ordered_array['first_set'])):
			tif_get_template('inc/' . $global_site . '/6posts-template.php', array('post_data' => $ordered_array['first_set']));
		endif;
		if (!empty($ordered_array['last_set'])):
			tif_get_template('inc/' . $global_site . '/3posts-template.php', array('post_data' => $ordered_array['last_set']));
		endif;
	?>
		<?php 

		$ajax_args = array();

		if (!empty($cat_id)):
			$ajax_args['cat'] = $cat_id;
		endif;

		if (is_singular('post')):
			if (!empty($excluded_categories)):
				$ajax_args['category__not_in'] = $excluded_categories;
			else:
				$ajax_args['post__not_in'] = array($post->ID);
			endif;
		endif;

		if (!empty($ajax_args)): ?>
		<input type="hidden" id="args" value='<?php echo json_encode($ajax_args); ?>' />
	<?php
		endif;
	else: ?>
	<p>Sorry, No posts exist.</p>
	<?php 
	endif;

	if (!empty($wrapper_end)): 
		echo $wrapper_end[0]; 
	else: ?>
	</div>
	<?php 
	endif; ?>
	<script>
		var thePattern = [3,6,3];
		var noMoreLeft = <?php echo !empty($has_more) ? 'false' : 'true'; ?>;
		<?php if (!empty($has_ads)): ?>
		var adGroup = <?php echo $posts_group_id; ?>;
		<?php endif; 

		if (!empty($sponsors_shown)):
			$exclude_sponsored_ids = !empty($exclude_sponsored_ids) ? array_merge($exclude_sponsored_ids, $sponsors_shown) : $sponsors_shown;
		endif; ?>
		var excludedSponsors = <?php echo !empty($exclude_sponsored_ids) ? json_encode($exclude_sponsored_ids) : '[]'; ?>;
		var allSponsors = <?php echo !empty($sponsored_ids) ? json_encode($sponsored_ids) : '[]'; ?>;
	</script>
<?php 
if (!empty($wrapper_end) && isset($wrapper_end[1])): 
 echo $wrapper_end[1];
else: ?>
</div>
<?php
endif; ?>

