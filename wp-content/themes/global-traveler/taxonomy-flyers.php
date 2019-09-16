<?php
// taxonomy-flyers.php
defined('ABSPATH') || exit;

global $post, $page_id, $global_site;

if (empty($global_site))
	$global_site = apply_filters('get_global_site', $global_site);

if (empty($global_site) || $global_site != 'globalusa') exit;

$term = get_queried_object();
get_header();

tif_get_template('inc/' . $global_site . '/heroes.php', array('type' => 'category', 'title' => single_term_title('', false)));
tif_get_template('inc/' . $global_site . '/base-template.php', array('global_site' => $global_site, 'taxonomy' => 'flyers', 'term' => $term, 'post_type' => 'newsletter')); ?>
<?php
get_footer(); ?>