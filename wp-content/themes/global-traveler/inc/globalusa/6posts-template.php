<?php
/*
	Filename: 6posts-template.php
	Description:  Shows 6 posts grouped by 3 columns in 2 rows.

	$has_ads (boolean) variable exists in here if needed... either true or false
	$ad_type (string) slug of ad, if exists...
*/
if (!defined('ABSPATH')) exit();

if (!empty($post_data)): ?>

<div class="post-grid row mx-0 py-4 mt-sm-5 px-3 px-sm-4 mx-md-3 mx-lg-2<?php echo !empty($has_ads) ? ' pl-lg-5 pr-lg-0' : ' px-lg-5'; ?>">
	<?php foreach($post_data as $k => $data):

	if (!property_exists($data, 'ad_type'))
	{
		$permalink = get_the_permalink($data->ID);
		$post_image = get_field('featured_image', $data->ID); // wp_get_attachment_image_src(get_post_thumbnail_id($data->ID), "full");
		$is_sponsored = get_field('is_sponsored', $data->ID);

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

		if (empty($is_sponsored))
		{
			$date = get_the_date('M j, Y', $data->ID);
			$categories = apply_filters('get_the_primary_category_with_child', array(), $data->ID);
		}
		$classes = ' d-flex';
	}
	else {

		if ($data->ad_type == 'basic')
		{
			if (property_exists($data, 'output'))
				$output = !empty($data->output) ? $data->output : '';
		}
		$classes = $ad_type == 'homepage-skyscraper' ? ' d-none d-md-flex' : ' d-flex';
	} ?>

	<div class="post-tall<?php echo !property_exists($data, 'ad_type') ? ' post-item' : ''; ?> col-24 col-sm-12 col-md-8<?php echo $classes; ?> flex-wrap align-content-start px-0 px-sm-2">
		<?php 
		if (!property_exists($data, 'ad_type')): ?>
		<div class="img-wrapper col-24">
			<?php
			if (!empty($image_caption)): ?>
			<div class="caption px-4">
				<?php echo apply_filters('the_content', $image_caption); ?>
			</div>
			<?php
			endif; ?>
			<a href="<?php echo $permalink; ?>" class="image"<?php echo !empty($post_image) ? ' style="background-image: url(' . $post_image . ');"' : ''; ?>></a>
		</div>
		<div class="copy d-flex flex-wrap">
			<h2 class="title">
				<a href="<?php echo $permalink; ?>" class="post">
					<span>
						<span class="text"><?php echo get_the_title($data->ID); ?></span>
					</span>
				</a>
			</h2>
			<?php 
			if (!empty($is_sponsored)): ?>
			<div class="tagline mt-4">
				<h5 class="categories"><?php _e('Sponsored Content', 'trazee'); ?></h5>
			</div>
			<?php 
			else: ?>
			<div class="tagline mt-4">
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
			<div class="ad-wrapper d-flex align-items-start justify-content-center py-4 py-sm-0 mb-sm-4<?php echo !empty($has_ads) ? ' pr-lg-5' : ''; ?>">
			<?php echo $output[0]; ?>
			</div>
		<?php	
		endif; ?>
	</div>
	<?php 
	endforeach; ?>
</div>
<?php endif; ?>