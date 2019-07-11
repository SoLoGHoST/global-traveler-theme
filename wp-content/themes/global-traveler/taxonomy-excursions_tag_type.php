<?php
// taxonomy-excursions_tag_type.php
defined('ABSPATH') || exit;

global $post, $page_id, $global_site;

if (empty($global_site))
	$global_site = apply_filters('get_global_site', $global_site);

if ($global_site != 'globalusa') exit;

get_header();

$term = get_queried_object();
$featured_tag_image = get_field('tag_featured_image', $term);

tif_get_template('inc/' . $global_site . '/heroes.php', array('type' => 'tag', 'tag_image' => $featured_tag_image));
tif_get_template('inc/' . $global_site . '/content-tags.php', array('term' => $term)); ?>

<?php
get_footer(); ?>
