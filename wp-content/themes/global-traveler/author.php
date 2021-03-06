<?php

if (!defined('ABSPATH')) exit;
global $post, $page_id, $is_home, $homepage_id, $global_site;

$author_id = (int) get_query_var('author');
$author = apply_filters('get_the_post_author_info', array(), $post);

// $cat_id = $category->cat_ID;
get_header();

if (empty($global_site))
	$global_site = apply_filters('get_global_site', $global_site);

$template_args = array(
	'global_site' => $global_site,
	'author_id' => $author_id,
	'author' => $author
);

if ($global_site == 'globalusa')
	$template_args['post_type'] = array('post', 'blog');


tif_get_template('inc/' . $global_site . '/heroes.php', array('type' => 'author', 'title' => $author['name']));
tif_get_template('inc/' . $global_site . '/base-template.php', $template_args);

get_footer(); ?>