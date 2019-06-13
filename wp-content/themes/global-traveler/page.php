<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
global $post, $page_id;
get_header(); 

$hero_type = get_field('hero_type');
$post_type = get_field('post_type');

tif_get_template('inc/heroes.php', array('main_post' => $post, 'type' => $hero_type)); 
?>

<div id="content" class="container-fluid no-pad my-5">
	<div class="section content px-5">
		<div class="mx-sm-5 px-sm-5">
<?php
	// Start the Loop.
while ( have_posts() ) :
	the_post();
	the_content();
endwhile; ?>
		</div>
	</div>
</div>

<?php
get_footer();
