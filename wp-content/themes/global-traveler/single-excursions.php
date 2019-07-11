<?php

defined('ABSPATH') || exit;

global $post, $page_id, $main_categories, $wpdb, $global_site;

get_header();

if (empty($global_site))
	$global_site = apply_filters('get_global_site', $global_site);

tif_get_template('inc/' . $global_site . '/heroes.php', array('main_post' => $post, 'type' => 'post', 'is_excursions_post' => true));
tif_get_template('inc/' . $global_site . '/content-excursion.php', array());

get_footer(); ?>