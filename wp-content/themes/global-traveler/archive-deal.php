<?php

// Archive for Deals

defined('ABSPATH') || exit;
global $post, $page_id, $homepage_id, $global_site, $wp_query;

if (empty($global_site))
	$global_site = apply_filters('get_global_site', $global_site);

// Only allow the Deal Archive Page for the Global Traveler site!
if ($global_site != 'globalusa') {
	$wp_query->set_404();
	status_header(404);
	get_template_part('404');
	exit;
}

get_header();

tif_get_template('inc/' . $global_site . '/heroes.php', array('type' => 'archive'));
tif_get_template('inc/' . $global_site . '/content-archives.php', array('post_type' => get_query_var('post_type'), 'custom_category' => 'deal_category'));

get_footer(); ?>