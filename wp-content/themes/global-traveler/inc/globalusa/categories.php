<?php

if (!defined('ABSPATH')) exit;
global $post, $page_id, $homepage_id, $global_site, $wpdb;

// Get all sponsored posts...
$sponsored_posts = $random_sponsors = $random_category_sponsored = $current_sponsored = array();

$total_sponsored = 0;
$exclude_sponsored_ids = array();
$sponsored_ids = array();

$sponsored_posts = apply_filters('get_sponsored_posts', array(), array());

$sponsored_category_posts = array();

if (!empty($sponsored_posts))
{
	// Randomly shuffle the posts...
	shuffle($sponsored_posts);

	foreach($sponsored_posts as $sponsored_key => $sponsored)
	{
		$sponsored_ids[] = $sponsored->ID;

		if (has_category($cat_id, $sponsored))
		{
			if (!empty($sponsored_category_posts))
				$sponsored_category_posts = array_merge($sponsored_category_posts, array_splice($sponsored_posts, $sponsored_key, 1));
			else
				$sponsored_category_posts = array_splice($sponsored_posts, $sponsored_key, 1);
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
	'cat' => $cat_id,
	'post__not_in' => $sponsored_ids,
	'post_status' => 'publish',
	'offset' => 0,
	'posts_per_page' => $posts_per_page - $total_sponsored
);

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

<div id="content" class="container-fluid no-pad my-2">
	<div id="posts-section" class="section content">
		<?php 
		if (!empty($ordered_array)):
			if (!empty($ordered_array['first_set'])):
				tif_get_template('inc/' . $global_site . '/6posts-template.php', array('post_data' => $ordered_array['first_set']));
			endif;
			if (!empty($ordered_array['last_set'])):
				tif_get_template('inc/' . $global_site . '/3posts-template.php', array('post_data' => $ordered_array['last_set']));
			endif;
		?>
		<input type="hidden" id="args" value='<?php echo json_encode(array('cat' => $cat_id)); ?>' />
		<?php
		else: ?>
		<p>Sorry, No results exist for this category.</p>
		<?php 
		endif; ?>
	</div>
	<script>
		var thePattern = [3,6,3];
		var noMoreLeft = <?php echo !empty($has_more) ? 'false' : 'true'; ?>;
		<?php if (!empty($has_ads)): ?>
		var adGroup = <?php echo $posts_group_id; ?>;
		<?php endif; ?>
		var excludedSponsors = <?php echo !empty($exclude_sponsored_ids) ? json_encode($exclude_sponsored_ids) : '[]'; ?>;
		var allSponsors = <?php echo !empty($sponsored_ids) ? json_encode($sponsored_ids) : '[]'; ?>;
	</script>
</div>

