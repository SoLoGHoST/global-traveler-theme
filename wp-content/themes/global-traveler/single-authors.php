<?php

// single-authors.php

defined('ABSPATH') || exit;

global $post, $page_id, $is_home, $homepage_id, $global_site;

$author_id = $post->ID;
$author = apply_filters('get_the_post_author_info', array(), $post);
get_header();

if (empty($global_site))
	$global_site = apply_filters('get_global_site', $global_site);

tif_get_template('inc/' . $global_site . '/heroes.php', array('type' => 'author', 'title' => $author['name']));
tif_get_template('inc/' . $global_site . '/base-template.php', array('global_site' => $global_site, 'author_id' => $author_id, 'author' => $author));

get_footer(); ?>