<?php

if (!defined('ABSPATH')) exit;

global $post, $page_id, $wpdb, $the_ads, $global_site;

$sponsored_posts = $current_sponsored = $the_ads = array();
$featured_post_id = 0;
// $offset = 0;

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


$first_set_adgroup_id = $wpdb->get_var('SELECT term_id FROM ' . $wpdb->terms . ' WHERE name = "Homepage Skyscraper" OR slug = "homepage-skyscraper" LIMIT 1');

if (!empty($first_set_adgroup_id) && function_exists('get_ad_group') && group_has_ads($first_set_adgroup_id)) {
	$per_page = 2;
	$first_set_ads[] = get_ad_group($first_set_adgroup_id);
}
else {
	$per_page = 3;
}

$first_set = $second_set = array();

$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'post_status' => 'publish',
	'offset' => $offset,
	'post__not_in' => $sponsored_ids,
	'posts_per_page' => $per_page,
);

$the_query = new WP_Query($args);

if (!empty($the_query->posts)): 

$first_set = $the_query->posts;

if (!empty($first_set_ads))
{
	$random_ad = count($first_set_ads) > 1 ? array_rand($first_set_ads, 1) : 0;
	$first_set[] = (object) [
		'ad_type' => 'basic',
		'output' => array_slice($first_set_ads, $random_ad, 1)
	];
} 

$offset = $offset + $per_page;

$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'post_status' => 'publish',
	'offset' => $offset,
	'post__not_in' => $sponsored_ids,
	'posts_per_page' => 3
);

$second_query = new WP_Query($args);

if (!empty($second_query->posts)) {
	if (!empty($current_sponsored)) {
		$second_set = array_merge(array_slice($second_query->posts, 0, 1), array_splice($current_sponsored, 0, 1), array_slice($second_query->posts, 1, 1));
		$offset = $offset + (count($second_query->posts) - 1);
	} else {
		$second_set = $second_query->posts;
		$offset = $offset + count($second_query->posts);
	}
}
?>

<div id="content">
	<div class="container-fluid d-flex no-pad">
		<div id="posts-section" class="section content pb-sm-5">
		<?php
			tif_get_template('inc/' . $global_site . '/6posts-template.php', array('post_data' => $first_set, 'has_ads' => !empty($first_set_ads), 'ad_type' => !empty($first_set_ads) ? 'homepage-skyscraper' : ''));

			if(function_exists('the_ad_placement') && placement_has_ads('homepage-leaderboard_2'))
			{
			echo '
				<div class="ad-home-leaderboard-2 px-4 mt-2 mb-5 mb-sm-0">
					<div class="row">
						<div class="d-flex mx-auto">';
							the_ad_placement('homepage-leaderboard_2');
			echo '
						</div>
					</div>
				</div>';
			}

			tif_get_template('inc/' . $global_site . '/3posts-template.php', array('post_data' => $second_set));

			$cta = array(
				'cta_image' => get_field('cta_image'),
				'cta_headline' => get_field('cta_headline'),
				'cta_buttonurl' => get_field('cta_buttonurl'),
				'cta_buttontext' => get_field('cta_buttontext')
			);

			// remove empty values from the array...
			$cta = array_filter($cta);
			if (!empty($cta)):
				tif_get_template('inc/' . $global_site . '/call-to-action.php', $cta); 
			endif; ?>
		</div>
	</div>
	<?php
	tif_get_template('inc/' . $global_site . '/fx-excursions-cta.php');
	tif_get_template('inc/instagram-feed.php', array()); 


	$has_more = false;
	$ordered_array = $rAD = array();
	$has_ads = false;

	// Get the id of the wp_term that has a name of '6 posts Ad Group'
	$posts_group_id = $wpdb->get_var('SELECT term_id FROM ' . $wpdb->terms . ' WHERE name = "6 posts Ad Group" OR slug = "6-posts-ad-group" LIMIT 1');

	if (!empty($posts_group_id) && function_exists('get_ad_group') && group_has_ads($posts_group_id))
	{
		$has_ads = true;
		$the_ads[] = get_ad_group($posts_group_id);
		$the_ads[] = get_ad_group($posts_group_id);
	}

	// Reset in order to get the correct # of sponsored posts...
	// $total_sponsored = !empty($sponsored_ids) ? count($sponsored_ids) - $total_sponsored : 0;
	$total_sponsors_count = count($sponsored_ids);
	$sponsors_difference = !empty($total_sponsors_count) ? ($total_sponsors_count - $total_sponsored) : 0;

	$posts_per_page = !empty($the_ads) ? 12 : 13;
	$args = array(
		'post_type' => 'post',
		'orderby' => 'date',
		'post_status' => 'publish',
		'post__not_in' => $sponsored_ids,
		'offset' => $offset,
		'posts_per_page' => ($posts_per_page - $sponsors_difference) // If no ad defined, we get all posts (13), otherwise, only need 12
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

		$first_sponsored = !empty($sponsors_difference) ? 1 : 0;
		$last_sponsored = !empty($sponsors_difference) && $sponsors_difference > 1 ? 1 : 0;

		$order_pattern = array(
			'first_set' => (3 - $first_sponsored),
			'second_set' => !empty($the_ads) ? 5 : 6,
			'last_set' => (3 - $last_sponsored) // Need to inject a sponsored content post in the middle here...
		);

		foreach($order_pattern as $key => $value)
		{
			if (!empty($the_query->posts))
			{
				$ordered_array[$key] = array_splice($the_query->posts, 0, $value);

				if ($key == 'second_set' && !empty($ordered_array[$key]) && !empty($the_ads))
				{
					$random_ad = count($the_ads) > 1 ? array_rand($the_ads, 1) : 0;

					$rAD[$key][] = (object) [
						'ad_type' => 'basic',
						'output' => array_splice($the_ads, $random_ad, 1)
					];

					$ordered_array[$key] = array_merge(array_slice($ordered_array[$key], 0, 2), $rAD[$key], array_slice($ordered_array[$key], 2));
				}

				if (($key == 'first_set' || $key == 'last_set') && !empty($ordered_array[$key]) && !empty($current_sponsored)) {
					$ordered_array[$key] = array_merge(array_slice($ordered_array[$key], 0, 1), array_splice($current_sponsored, 0, 1), array_slice($ordered_array[$key], 1));
				}
			}
		}

	} ?>

	<div class="container-fluid d-flex no-pad">
		<?php 
		if (!empty($ordered_array)): ?>
		<div class="section content py-4">
			<?php 
				if (!empty($ordered_array['first_set'])):
					tif_get_template('inc/' . $global_site . '/3posts-template.php', array('post_data' => $ordered_array['first_set']));
				endif;

				if (!empty($ordered_array['second_set'])):
					tif_get_template('inc/' . $global_site . '/6posts-template.php', array('post_data' => $ordered_array['second_set']));
				endif;

				if (!empty($ordered_array['last_set'])):
					tif_get_template('inc/' . $global_site . '/3posts-template.php', array('post_data' => $ordered_array['last_set']));
				endif;
			?>
		</div>
		<?php 
		endif; ?>
	</div>
</div>
<?php // exclude eflyer- categories from homepage... ?>
<input id="args" type="hidden" value='<?php echo json_encode(array('category__not_in' => apply_filters('get_eflyer_category_ids', array()))); ?>' />
<?php
endif; ?>

<script>
	var thePattern = [3,6,3];
	var noMoreLeft = <?php echo !empty($has_more) ? 'false' : 'true'; ?>;
	<?php if (!empty($has_ads)): ?>
	var adGroup = <?php echo $posts_group_id; ?>;
	<?php endif; ?>
	var excludedSponsors = <?php echo !empty($exclude_sponsored_ids) ? json_encode($exclude_sponsored_ids) : '[]'; ?>;
	var allSponsors = <?php echo !empty($sponsored_ids) ? json_encode($sponsored_ids) : '[]'; ?>;
</script>
