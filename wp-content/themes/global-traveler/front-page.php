<?php

if (!defined('ABSPATH')) exit;
global $post, $page_id, $wpdb, $hero_type, $home_video, $the_ads;

$hero_type = get_field('hero_type');
$hero_post_type = get_field('post_type');
$home_video = get_field('video');

/*
if (!empty($home_video))
	echo '<pre>', var_dump($home_video), '</pre>';
*/

get_header();

$sponsored_posts = $current_sponsored = array();
$featured_post_id = 0;
$offset = 0;

$template_args = array(
	'type' => $hero_type
);

if ($hero_type != 'hometakeover')
{
	$args = array(
		'post_type' => $hero_post_type,
		'orderby' => 'date',
		'post_status' => 'publish',
		'posts_per_page' => 1
	);

	$the_loop = new WP_Query($args);

	if (!empty($the_loop->posts))
	{
		$template_args['main_post'] = $the_loop->posts[0];
		$offset = 1;
	}
}

tif_get_template('inc/heroes.php', $template_args);

// Grab a Random Sponsored Post

$total_sponsored = 0;
$exclude_sponsored_ids = array();
$sponsored_ids = array();

$sponsored_posts = apply_filters('get_sponsored_posts', array(), array());

if (!empty($sponsored_posts))
{
	foreach($sponsored_posts as $sponsored)
		$sponsored_ids[] = $sponsored->ID;

	$random_sponsored_keys = count($sponsored_posts) > 1 ? array_rand($sponsored_posts, 2) : array(0);

	if (!empty($random_sponsored_keys))
	{
		foreach($random_sponsored_keys as $random_sponsored_key)
		{
			$current_sponsored[] = $sponsored_posts[$random_sponsored_key];
			$exclude_sponsored_ids[] = $sponsored_posts[$random_sponsored_key]->ID;

			$total_sponsored++;
		}

		$sponsored_posts = array_diff_key($sponsored_posts, array_keys($random_sponsored_keys));
	}
}

$has_more = false;
$ordered_array = array();
$had_ads = false;
// Get the id of the wp_term that has a name of '6 posts Ad Group'
$posts_group_id = $wpdb->get_var('SELECT term_id FROM ' . $wpdb->terms . ' WHERE name = "6 posts Ad Group" OR slug = "6-posts-ad-group" LIMIT 1');

if (!empty($posts_group_id) && function_exists('get_ad_group') && group_has_ads($posts_group_id))
{
	$has_ads = true;
	$the_ads[] = get_ad_group($posts_group_id);
	$the_ads[] = get_ad_group($posts_group_id);
}
$posts_per_page = !empty($the_ads) ? 11 : 12;

$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'post_status' => 'publish',
	'offset' => $offset,
	'post__not_in' => $sponsored_ids,
	'posts_per_page' => ($posts_per_page - $total_sponsored),
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
		'first_set' => 2,
		'second_set' => !empty($the_ads) ? (!empty($total_sponsored) ? 5 - 1 : 5) : (!empty($total_sponsored) ? 6 - 1 : 6),
		'last_set' => !empty($total_sponsored) && $total_sponsored > 1 ? 3 - 1 : 3
	);

	foreach($order_pattern as $key => $value)
	{
		if (!empty($the_query->posts))
		{
			$ordered_array[$key] = array_splice($the_query->posts, 0, $value);

			if ($key == 'second_set' && !empty($ordered_array[$key]))
			{
				if (!empty($current_sponsored))
					$ordered_array[$key] = array_merge(array_splice($current_sponsored, 0, 1), $ordered_array[$key]);

				if (!empty($the_ads))
				{
					$random_ad = count($the_ads) > 1 ? array_rand($the_ads, 1) : 0;
					$ordered_array[$key][] = (object) [
						'ad_type' => 'basic',
						'output' => array_splice($the_ads, $random_ad, 1)
					];
				}
			}
			if ($key == 'last_set' && !empty($ordered_array[$key]) && !empty($current_sponsored))
				$ordered_array[$key] = array_merge(array_slice($ordered_array[$key], 0, 1), array_splice($current_sponsored, 0, 1), array_slice($ordered_array[$key], 1));
		}
	}

} ?>

<div id="content">
	<div class="container-fluid d-flex no-pad">
		<?php 
		if (!empty($ordered_array)): ?>
		<div id="posts-section" class="section content pb-sm-5">
			<?php 
				if (!empty($ordered_array['first_set'])):
					tif_get_template('inc/2posts-template.php', array('post_data' => $ordered_array['first_set']));
				endif;

				if (!empty($ordered_array['second_set'])):
					tif_get_template('inc/6posts-template.php', array('post_data' => $ordered_array['second_set']));
				endif;

				if(function_exists('the_ad_placement') && placement_has_ads('homepage-middle')): ?>
					<div class="container header-ad px-4 mt-2">
						<div class="row">
							<div class="d-flex mx-auto">
								<?php the_ad_placement('homepage-middle'); ?>
							</div>
						</div>
					</div>
				<?php
				endif;
				if (!empty($ordered_array['last_set'])):
					tif_get_template('inc/3posts-template.php', array('post_data' => $ordered_array['last_set']));
				endif;
			?>
		</div>
		<?php 
		endif; ?>
	</div>

<?php 

	tif_get_template('inc/instagram-feed.php', array());


$total_sponsored = 0;
$current_sponsored = array();

if (!empty($sponsored_posts))
{
	$random_sponsored_key = array_rand($sponsored_posts, 1);
	$current_sponsored[] = $sponsored_posts[$random_sponsored_key];
	$exclude_sponsored_ids[] = $sponsored_posts[$random_sponsored_key]->ID;

	array_splice($sponsored_posts, $random_sponsored_key, 1);

	$total_sponsored++;
}

$has_more = false;
$ordered_array = array();
$posts_per_page = !empty($the_ads) ? 11 : 12;
$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'post_status' => 'publish',
	'post__not_in' => $sponsored_ids,
	'offset' => (($posts_per_page - $total_sponsored) + $offset),
	'posts_per_page' => ($posts_per_page - $total_sponsored) // If no ad defined, we get all posts (12), otherwise, only need 11
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
		'first_set' => 2,
		'second_set' => !empty($the_ads) ? 5 : 6,
		'last_set' => (3 - $total_sponsored) // Need to inject a sponsored content post in the middle here...
	);

	foreach($order_pattern as $key => $value)
	{
		if (!empty($the_query->posts))
		{
			$ordered_array[$key] = array_splice($the_query->posts, 0, $value);

			if ($key == 'second_set' && !empty($ordered_array[$key]) && !empty($the_ads))
			{
				$random_ad = count($the_ads) > 1 ? array_rand($the_ads, 1) : 0;
				$ordered_array[$key][] = (object) [
					'ad_type' => 'basic',
					'output' => array_splice($the_ads, $random_ad, 1)
				];
			}

			if ($key == 'last_set' && !empty($ordered_array[$key]) && !empty($current_sponsored))
				$ordered_array[$key] = array_merge(array_slice($ordered_array[$key], 0, 1), $current_sponsored, array_slice($ordered_array[$key], 1));
		}
	}

} ?>
	<div class="container-fluid d-flex no-pad">
		<?php 
		if (!empty($ordered_array)): ?>
		<div class="section content py-4">
			<?php 
				if (!empty($ordered_array['last_set'])):
					tif_get_template('inc/3posts-template.php', array('post_data' => $ordered_array['last_set']));
				endif;

				if (!empty($ordered_array['second_set'])):
					tif_get_template('inc/6posts-template.php', array('post_data' => $ordered_array['second_set']));
				endif;

				if (!empty($ordered_array['first_set'])):
					tif_get_template('inc/2posts-template.php', array('post_data' => $ordered_array['first_set']));
				endif;
			?>
		</div>
		<?php 
		endif; ?>
	</div>
</div>

<script>
	// Not sure we need this code below...
	var thePattern = [3,6,2];
	var noMoreLeft = <?php echo !empty($has_more) ? 'false' : 'true'; ?>;
	<?php if (!empty($has_ads)): ?>
	var adGroup = <?php echo $posts_group_id; ?>;
	<?php endif; ?>
	var excludedSponsors = <?php echo !empty($exclude_sponsored_ids) ? json_encode($exclude_sponsored_ids) : '[]'; ?>;
	var allSponsors = <?php echo !empty($sponsored_ids) ? json_encode($sponsored_ids) : '[]'; ?>;
</script>

<?php get_footer(); ?>