<?php

if (!defined('ABSPATH')) exit;
global $post, $page_id, $homepage_id;

$year = get_query_var('year');
get_header(); 

// $submenu = get_field('submenu', $homepage_id);
?>

<?php 
// tif_get_template('inc/heroes.php', array('type' => $hero_type, 'headline' => 'Year: '. $year, 'content' => '')); ?>

<?php 
/*
if (!empty($submenu))
tif_get_template('inc/submenu.php', array('menu_id' => $submenu)); */

$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'year' => $year,
	'post_status' => 'publish',
	'posts_per_page' => 11
);

$the_query = new WP_Query($args);
$remaining_posts = $first_set = $last_set = array();

if (!empty($the_query->posts))
{
	$total_posts = count($the_query->posts);

	if ($total_posts > 10)
	{
		array_pop($the_query->posts);
		$has_more = true;
	}

	// Split it up in groups of 2
	$posts_chunked = array_chunk($the_query->posts, 2);

	$first_set = array_shift($posts_chunked);

	if (!empty($posts_chunked))
	{
		if (count($posts_chunked) > 3)
			$last_set = array_pop($posts_chunked);

		foreach($posts_chunked as $chunked)
			foreach($chunked as $data)
				$remaining_posts[] = $data;
	}
} ?>

<div id="year-content" class="container">
	<div id="posts-section" class="section content">
		<?php 
			tif_get_template('inc/2posts-template.php', array('post_data' => $first_set));
			tif_get_template('inc/6posts-template.php', array('post_data' => $remaining_posts));
			tif_get_template('inc/2posts-template.php', array('post_data' => $last_set));
		?>
		<input type="hidden" id="args" value="year" />
		<input type="hidden" id="year" value="<?php echo $year; ?>" />
	</div>
	<script>
		var noMoreLeft = <?php echo !empty($has_more) ? 'false' : 'true'; ?>
	</script>
</div>

<?php get_footer(); ?>