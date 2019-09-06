<?php

// Archive for Deals

defined('ABSPATH') || exit;
global $post, $page_id, $homepage_id, $global_site;

get_header();
if (empty($global_site))
	$global_site = apply_filters('get_global_site', $global_site);

tif_get_template('inc/' . $global_site . '/heroes.php', array('type' => 'archive'));
tif_get_template('inc/' . $global_site . '/content-archives.php', array('post_type' => get_query_var('post_type')));

get_footer(); ?>