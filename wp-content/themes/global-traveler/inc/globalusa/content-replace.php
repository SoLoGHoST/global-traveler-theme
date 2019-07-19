<?php
// file:  content-replace.php
// Available variables:  $global_site, $cat_id, $category

defined('ABSPATH') || exit;

// Showing them ALL!
$content_args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'desc',
	'post_status' => 'publish',
    'posts_per_page' => -1
);

if (!empty($cat_id))
	$content_args['cat'] = $cat_id;

$content_query = new WP_Query($content_args); ?>

<div id="content" class="container-fluid no-pad my-2">
	<div class="section content">
<?php
if (!empty($content_query->posts)): ?>

<?php
	$chunked_content = array_chunk($content_query->posts, 3);

	foreach($chunked_content as $content_posts):
		tif_get_template('inc/' . $global_site . '/3posts-template.php', array('post_data' => $content_posts, 'excursion_page' => true));
	endforeach; ?>

<?php
endif; ?>
	</div>
</div>