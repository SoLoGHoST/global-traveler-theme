<?php
	
// The Tags Archive Page...

if (!defined('ABSPATH')) exit;
global $post, $page_id, $homepage_id, $wp_query, $global_site;


$tag_title = get_query_var('tag');
$tag_id = get_query_var('tag_id');
$tag = get_tag($tag_id);
get_header(); ?>

<?php 
$global_site = apply_filters('get_global_site', $global_site);
tif_get_template('inc/' . $global_site . '/heroes.php', array('type' => 'category', 'title' => 'Tag: ' . $tag->name));

$sponsored_posts = $random_sponsors = $random_tag_sponsored = $current_sponsored = array();

$total_sponsored = 0;
$exclude_sponsored_ids = array();
$sponsored_ids = array();

$sponsored_posts = apply_filters('get_sponsored_posts', array(), array());

$sponsored_tag_posts = array();

if (!empty($sponsored_posts))
{
	// Randomly shuffle the posts...
	shuffle($sponsored_posts);

	foreach($sponsored_posts as $sponsored_key => $sponsored)
	{
		$sponsored_ids[] = $sponsored->ID;

		if (has_tag($tag_id, $sponsored))
		{
			if (!empty($sponsored_tag_posts))
				$sponsored_tag_posts = array_merge($sponsored_tag_posts, array_splice($sponsored_posts, $sponsored_key, 1));
			else
				$sponsored_tag_posts = array_splice($sponsored_posts, $sponsored_key, 1);
		}
	}

	// Grab up to 2 sponsored_tag_posts...
	if (!empty($sponsored_tag_posts))
	{
		$random_tag_sponsored = array_splice($sponsored_tag_posts, 0, 2);

		if (!empty($random_tag_sponsored))
		{
			foreach($random_tag_sponsored as $random_post)
			{
				$exclude_sponsored_ids[] = $random_post->ID;
				$total_sponsored++;
			}
		}
	}

	// If less than 2 sponsored tag posts are found, get up to 2 regular sponsors that are not of the tag...
	if ($total_sponsored < 2)
	{
		$random_sponsors = array_splice($sponsored_posts, 0, (2 - $total_sponsored));

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
	$current_sponsored = array_merge($random_tag_sponsored, $random_sponsors);
}


$has_more = false;
$ordered_array = array();
$the_ads = array();
$posts_per_page = !empty($the_ads) ? 12 : 11;
$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'tag_id' => $tag_id,
	'post__not_in' => $sponsored_ids,
	'post_status' => 'publish',
	'offset' => 0,
	'posts_per_page' => ($posts_per_page - $total_sponsored)
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

	$half_sponsored = !empty($total_sponsored) ? ceil(1 / $total_sponsored) : 0;

	$order_pattern = array(
		'first_set' => 2,
		'second_set' => 2,
		'third_set' => (3 - $half_sponsored),
		'last_set' => (3 - ($total_sponsored - $half_sponsored))
	);

	foreach($order_pattern as $key => $value)
	{
		if (!empty($the_query->posts))
		{
			$ordered_array[$key] = array_splice($the_query->posts, 0, $value);

			if (in_array($key, array('third_set', 'last_set')) && !empty($ordered_array[$key]) && !empty($current_sponsored))
				$ordered_array[$key] = array_merge(array_slice($ordered_array[$key], 0, 1), array_splice($current_sponsored, 0, 1), array_slice($ordered_array[$key], 1));
		}
	}
}

?>

<div id="content" class="container-fluid no-pad my-5">
	<div id="posts-section" class="section content">
	<?php
		if (!empty($ordered_array)):
			if (!empty($ordered_array['first_set'])):
				tif_get_template('inc/2posts-template.php', array('post_data' => $ordered_array['first_set']));
			endif;
			if (!empty($ordered_array['second_set'])):
				tif_get_template('inc/2posts-template.php', array('post_data' => $ordered_array['second_set']));
			endif;
			if (!empty($ordered_array['third_set'])):
				tif_get_template('inc/3posts-template.php', array('post_data' => $ordered_array['third_set']));
			endif;
			if (!empty($ordered_array['last_set'])):
				tif_get_template('inc/3posts-template.php', array('post_data' => $ordered_array['last_set']));
			endif;
		?>
		<input type="hidden" id="args" value='<?php echo json_encode(array('tag_id' => $tag_id)); ?>' />
	<?php 
		else: ?>
		<p>Sorry, No results exist for this tag.</p>
	<?php 
		endif; ?>
	</div>
	<script>
		var thePattern = [2,2,3,3];
		var noMoreLeft = <?php echo !empty($has_more) ? 'false' : 'true'; ?>;
		var excludedSponsors = <?php echo !empty($exclude_sponsored_ids) ? json_encode($exclude_sponsored_ids) : '[]'; ?>;
		var allSponsors = <?php echo !empty($sponsored_ids) ? json_encode($sponsored_ids) : '[]'; ?>;
		var theAds = [];
	</script>
</div>

<?php get_footer(); ?>