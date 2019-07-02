<?php
	
// USED FOR NEWS CATEGORIES

if (!defined('ABSPATH')) exit;
global $post, $page_id, $homepage_id, $global_site;

$category = get_category(get_query_var('cat'));
$cat_id = $category->cat_ID;
get_header(); ?>

<?php 

$global_site = apply_filters('get_global_site', $global_site);
tif_get_template('inc/' . $global_site . '/heroes.php', array('type' => 'category', 'title' => $category->name));
tif_get_template('inc/' . $global_site . '/categories.php', array('global_site' => $global_site, 'cat_id' => $cat_id, 'category' => $category));

get_footer(); ?>