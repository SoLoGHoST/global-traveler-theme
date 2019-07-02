<?php 
/*
	Filename: 3posts-template.php
	Description: Shows 3 posts at a time in a wrapper, vertically.
*/
	if (!defined('ABSPATH')) exit();


if (!empty($post_data)): ?>
<div class="post-list col-24 offset-sm-1 col-sm-22 offset-md-1 col-md-22 offset-lg-2 col-lg-20">
	<?php foreach($post_data as $data):

	$is_sponsored = get_field('is_sponsored', $data->ID);

	$post_image = get_field('featured_image', $data->ID); // wp_get_attachment_image_src(get_post_thumbnail_id($data->ID), "full");
	
	if (empty($post_image))
	{
		$thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id($data->ID), "thumbnail_2");
		$post_image = !empty($thumbnail_image) ? $thumbnail_image[0] : '';
	}
	else
		$post_image = !empty($post_image) && isset($post_image['sizes'], $post_image['sizes']['thumbnail_2']) ? $post_image['sizes']['thumbnail_2'] : '';
		// $post_image = !empty($post_image) && !empty($post_image['url']) ? $post_image['url'] : '';


	if (empty($is_sponsored))
	{
		$date = get_the_date('M j, Y', $data->ID);
		$categories = apply_filters('get_the_primary_category_with_child', array(), $data->ID); 
	} ?>
	
	<div class="post-wide post-item row align-items-center py-sm-3 mt-sm-5 mx-sm-4 px-3 px-sm-2 mb-5 mb-sm-0">
		<div class="img-wrapper col-10 col-sm">
			<a href="<?php echo get_the_permalink($data->ID); ?>" class="image"<?php echo !empty($post_image) ? ' style="background-image: url(' . $post_image . ');"' : ''; ?>></a>
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
				<h5 class="categories">
					<?php if (!empty($categories)): 
						if (!empty($categories['primary'])): ?>
							<a href="<?php echo esc_url($categories['primary']['link']); ?>"><?php echo $categories['primary']['title']; ?></a>
							<?php
							if (!empty($categories['child'])): ?>
							/ <a href="<?php echo esc_url($categories['child']['link']); ?>"><?php echo $categories['child']['title']; ?></a>
							<?php
							endif;
						endif;
					endif; ?>
				</h5>
				<span class="date"><?php echo $date; ?></span>
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