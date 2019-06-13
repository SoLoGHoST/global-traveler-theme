<?php

if (!defined('ABSPATH')) exit;
global $post, $page_id, $is_home, $homepage_id;

$author = get_the_author();

$hero_type = "basic";
$is_home = false;
get_header(); 

$submenu = get_field('submenu', $homepage_id); ?>

<?php 

$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'author' => get_the_author_meta('ID'),
	'post_status' => 'publish',
	'posts_per_page' => 1
);

$the_loop = new WP_Query($args);

if($the_loop->have_posts()):
	while($the_loop->have_posts()): 
		$the_loop->the_post();
		tif_get_template('inc/heroes.php', array());
	endwhile;
endif; 
wp_reset_postdata();


if (!empty($submenu))
tif_get_template('inc/submenu.php', array('menu_id' => $submenu));


$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'author' => get_the_author_meta('ID'),
	'post_status' => 'publish',
	'offset' => 1,
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
}

?>

<div id="author-content" class="container">
	<div id="posts-section" class="section content">
		<?php 
			tif_get_template('inc/2posts-template.php', array('post_data' => $first_set));
			tif_get_template('inc/6posts-template.php', array('post_data' => $remaining_posts));
			tif_get_template('inc/2posts-template.php', array('post_data' => $last_set));
		?>
		<input type="hidden" id="args" value="author" />
		<input type="hidden" id="author" value="<?php echo get_the_author_meta('ID'); ?>" />
	</div>
	<script>
		var noMoreLeft = <?php echo !empty($has_more) ? 'false' : 'true'; ?>;
	</script>
</div>

<?php get_footer(); ?>