<?php
/*
	Filename: 6posts-template.php
	Description:  Shows 6 posts grouped by 3 columns in 2 rows.
*/
if (!defined('ABSPATH')) exit();

if (!empty($post_data)): ?>

<div class="post-grid row mx-0 py-4 mt-sm-5 px-3 px-sm-4 mx-md-3 px-lg-5 mx-lg-2">
	<?php foreach($post_data as $k => $data):

	if (!property_exists($data, 'ad_type'))
	{
		$category_top = false;
		$permalink = get_the_permalink($data->ID);
		$post_image = get_field('featured_image', $data->ID); // wp_get_attachment_image_src(get_post_thumbnail_id($data->ID), "full");
		$is_sponsored = get_field('is_sponsored', $data->ID);

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
		}

		if ($k == 1 || $k == 4)
			$category_top = true;
	}
	else {

		if ($data->ad_type == 'basic')
		{
			if (property_exists($data, 'output'))
				$output = !empty($data->output) ? $data->output : '';
		}

	} ?>

	<div class="post-tall post-item col-24 col-sm-12 col-md-8 d-flex flex-wrap<?php echo !property_exists($data, 'ad_type') ? ' align-content-center' : ''; ?><?php echo !empty($category_top) && !property_exists($data, 'ad_type') ? ' py-sm-4 alt-top' : ''; ?> px-0 px-sm-3 mb-5 mb-sm-0">
		<?php 
		if (!property_exists($data, 'ad_type')): ?>
		<div class="img-wrapper col-24<?php echo !empty($category_top) ? ' order-last' : ''; ?>">
			<a href="<?php echo $permalink; ?>" class="image"<?php echo !empty($post_image) ? ' style="background-image: url(' . $post_image . ');"' : ''; ?>></a>
		</div>
		<div class="copy d-flex flex-wrap<?php echo !empty($category_top) ? ' order-last order-sm-first' : ''; ?>">
			<h3 class="title">
				<a href="<?php echo $permalink; ?>" class="post">
					<span>
						<span class="text"><?php echo get_the_title($data->ID); ?></span>
					</span>
				</a>
			</h3>
			<?php 
			if (!empty($is_sponsored)): ?>
			<div class="tagline<?php echo !empty($category_top) ? ' order-last order-sm-first' : ''; ?>">
				<h5 class="categories"><?php _e('Sponsored Content', 'trazee'); ?></h5>
			</div>
			<?php 
			else: ?>
			<div class="tagline<?php echo !empty($category_top) ? ' order-last order-sm-first' : ''; ?>">
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
		</div>
		<?php
		elseif (!empty($output) && !empty($output[0])): ?>
			<div class="ad-wrapper d-flex align-items-center justify-content-center py-4 py-sm-0 my-sm-4">
			<?php echo $output[0]; ?>
			</div>
		<?php	
		endif; ?>
	</div>
	<?php 
	endforeach; ?>
</div>
<?php endif; ?>