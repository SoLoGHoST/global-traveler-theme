<?php
/*
* Template Name: FX Excursions Template
*/
global $post, $page_id, $global_site;
get_header();

if (empty($global_site))
	$global_site = apply_filters('get_global_site', $global_site);

tif_get_template('inc/' . $global_site . '/fx-excursions-cta.php');
tif_get_template('inc/' . $global_site . '/default-page.php', array('page_content' => false));
get_footer();
