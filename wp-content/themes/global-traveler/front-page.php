<?php

if (!defined('ABSPATH')) exit;
global $post, $page_id, $wpdb, $hero_type, $home_video, $global_site;

$hero_type = get_field('hero_type');
$home_video = get_field('video');

/*
if (!empty($home_video))
	echo '<pre>', var_dump($home_video), '</pre>';
*/

get_header();

$template_args = array(
	'type' => $hero_type
);

if (empty($global_site)) {
	$global_site = get_theme_mod('tif_global_site');
	$global_site = !empty($global_site) ? $global_site : 'trazeetravel';
}

$is_globalusa = !empty($global_site) && $global_site == 'globalusa';

$hero_post_type = empty($is_globalusa) ? get_field('post_type') : '';

/*
if (!empty($is_globalusa))
	if (in_array($hero_type, array('hometakeover', 'home')))
		unset($hero_post_type);
*/

if ($hero_type != 'hometakeover' && !empty($hero_post_type))
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

$global_site = apply_filters('get_global_site', $global_site);
tif_get_template('inc/' . $global_site . '/heroes.php', $template_args);
tif_get_template('inc/' . $global_site . '/homepage.php', array('global_site' => $global_site));
get_footer(); ?>