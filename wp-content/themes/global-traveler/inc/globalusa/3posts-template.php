<?php 
/*
	Filename: 3posts-template.php
	Description: Shows 3 posts at a time in a wrapper, vertically.
*/
	if (!defined('ABSPATH')) exit();

if (!empty($post_data)):

	$post_list_classes = !empty($excursion_page) ? ' col-24' : ' col-24 offset-sm-1 col-sm-22 offset-md-1 col-md-22 offset-lg-2 col-lg-20';
	$post_wide_classes = !empty($excursion_page) ? ' align-items-center py-sm-3 px-3 px-sm-2 mb-5 mb-sm-0' : ' align-items-center mx-sm-4 py-sm-3 mt-sm-5 px-3 px-sm-2 mb-5 mb-sm-0'; ?>
<div class="post-list<?php echo $post_list_classes; ?>">
	<?php foreach($post_data as $data):

	$category_slugs = wp_get_post_categories($data->ID, array('fields' => 'id=>slug'));

	$has_placeholder_image = false;
	$is_sponsored = get_field('is_sponsored', $data->ID);

	$post_image = get_field('featured_image', $data->ID); // wp_get_attachment_image_src(get_post_thumbnail_id($data->ID), "full");

	if (empty($post_image))
	{
		$thumbnail_id = get_post_thumbnail_id($data->ID);
		$image_caption = wp_get_attachment_caption($thumbnail_id);
		$thumbnail_image = wp_get_attachment_image_src($thumbnail_id, "thumbnail_2");
		$post_image = !empty($thumbnail_image) ? $thumbnail_image[0] : '';
	}
	else {
		$image_caption = $post_image['caption'];
		$post_image = !empty($post_image) && isset($post_image['sizes'], $post_image['sizes']['thumbnail_2']) ? $post_image['sizes']['thumbnail_2'] : '';
		// $post_image = !empty($post_image) && !empty($post_image['url']) ? $post_image['url'] : '';
	}

	// If post_image is still empty... we are going to grab the default placeholder image instead.
	if (empty($post_image)) {
		$post_image = apply_filters('get_global_site_directory_path_uri', '', 'images', 'default-placeholder-img.jpg');
		$has_placeholder_image = !empty($post_image);
	}

	if (empty($is_sponsored))
	{
		$date = get_the_date('M j, Y', $data->ID);
		if (!empty($custom_category))
			$categories = array(
				'primary' => apply_filters('get_the_primary_category', array(), $data->ID, $custom_category),
				'child' => array()
			);
		else
			$categories = apply_filters('get_the_primary_category_with_child', array(), $data->ID, '');
	} ?>
	
	<div class="post-wide post-item row<?php echo $post_wide_classes; ?>">
		<div class="img-wrapper col-10 col-sm">
			<?php
			if (!empty($category_slugs) && in_array('print-article', $category_slugs)): 
				$print_article_image = apply_filters('get_global_site_directory_path_uri', '', 'images', 'print-article.png'); ?>
			<div class="print-article px-4 py-1 d-flex justify-content-start align-items-center">
				<?php 
				if (!empty($print_article_image)): ?>
				<div class="circle-highlight">
					<img src="<?php echo $print_article_image; ?>" alt="Print Article" class="particle-img" />
				</div>
				<?php
				endif; ?>
				<p class="article-text my-auto"><?php _e('Global Traveler Mag', 'tif_global'); ?></p>
			</div>
			<?php
			endif;
			if (!empty($image_caption)): ?>
			<div class="caption px-4">
				<?php echo apply_filters('the_content', $image_caption); ?>
			</div>
			<?php
			endif; ?>
			<a href="<?php echo get_the_permalink($data->ID); ?>" class="image<?php echo !empty($has_placeholder_image) ? ' placeholder' : ''; ?>"<?php echo !empty($post_image) ? ' style="background-image: url(' . $post_image . ');"' : ''; ?>></a>
		</div>
		<div class="copy col-14 offset-0 offset-sm-1 col-sm my-2">
			<?php 
			if (!empty($is_sponsored)): ?>
			<div class="sponsored">
				<h5 class="categories"><?php _e('Sponsored Content', 'trazee'); ?></h5>
			</div>
			<?php
			else: ?>
			<div class="tagline">
				<?php 
				if (!empty($categories)): ?>
				<h5 class="categories">
				<?php
					if (!empty($categories['primary'])): ?>
						<a href="<?php echo esc_url($categories['primary']['link']); ?>"><?php echo $categories['primary']['title']; ?></a>
						<?php
						if (!empty($categories['child'])): ?>
						/ <a href="<?php echo esc_url($categories['child']['link']); ?>"><?php echo $categories['child']['title']; ?></a>
						<?php
						endif;
					endif; ?>
				</h5>
				<?php
				endif;
				$post_type = get_post_type($data->ID);
				if ($post_type != 'excursions'): ?>
				<span class="date"><?php echo $date; ?></span>
				<?php
				endif; ?>
			</div>
			<?php
			endif; ?>
			<h3 class="title">
				<a href="<?php echo get_the_permalink($data->ID); ?>" class="post">
					<span>
						<span class="text"><?php echo get_the_title($data->ID); ?></span>
					</span>
				</a>
			</h3>
			<?php echo apply_filters('get_post_first_paragraph', '', $data->ID); ?>
		</div>
	</div>
	<?php endforeach; ?>

</div>
<?php endif; ?>