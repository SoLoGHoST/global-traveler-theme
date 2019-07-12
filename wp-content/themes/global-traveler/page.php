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
global $post, $page_id, $global_site;
get_header(); 

if (empty($global_site))
	$global_site = apply_filters('get_global_site', $global_site);

$hero_type = get_field('hero_type');

// @TODO - this setting isn't being used for pages anywhere that I know of, NEED TO CHECK if this ACF FIELD is even needed anymore!
// Be sure to check whether the homepage template is using it or not first!
$post_type = get_field('post_type');
$excursion_landing_pages = $excursion_page = array();

if ($global_site == 'globalusa') {
	$excursion_landing_pages = get_field('fx_landing_child_pages', 'option');

	if (!empty($excursion_landing_pages)) {
		foreach($excursion_landing_pages as $excursion_landing_page) {
			if ($excursion_landing_page->ID == $post->ID) {
				$excursion_page = array(
					'id' => $excursion_landing_page->ID,
					'slug' => $excursion_landing_page->post_name,
					'title' => $excursion_landing_page->post_title
				);
				break;
			}
		}
	}
}

tif_get_template('inc/' . $global_site . '/heroes.php', array('main_post' => $post, 'type' => !empty($hero_type) ? $hero_type : 'post', 'excursion_landing_pages' => $excursion_landing_pages, 'excursion_page' => $excursion_page));
tif_get_template('inc/' . $global_site . '/default-page.php', array('excursion_landing_pages' => $excursion_landing_pages, 'excursion_page' => $excursion_page));
get_footer();