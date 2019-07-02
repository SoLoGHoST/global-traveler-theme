<?php 
/*
	Filename: 2posts-template.php
	Description: Shows 2 posts at a time in a wrapper, vertically.
*/

if (!defined('ABSPATH')) exit();


if (!empty($post_data)): ?>
<div class="row mx-0 pt-4 px-4">
	<?php foreach($post_data as $data):

	if (!property_exists($data, 'ad_type'))
	{
		$permalink = get_the_permalink($data->ID);

		$post_image = get_field('featured_image', $data->ID); // wp_get_attachment_image_src(get_post_thumbnail_id($data->ID), "full");

		if (empty($post_image))
		{
			$thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id($data->ID), "thumbnail_2");
			$post_image = !empty($thumbnail_image) ? $thumbnail_image[0] : '';
		}
		else
			$post_image = !empty($post_image) && isset($post_image['sizes'], $post_image['sizes']['thumbnail_2']) ? $post_image['sizes']['thumbnail_2'] : '';

		//$categories = get_the_category($data->ID);
		$date = get_the_date('M j, Y', $data->ID);
		$categories = apply_filters('get_the_primary_category_with_child', array(), $data->ID); 
	}
	else
	{
		if ($data->ad_type == 'basic')
		{
			if (property_exists($data, 'image'))
				$post_image = !empty($data->image) ? $data->image[0] : '';

			if (property_exists($data, 'url'))
				$permalink = $data->url;
		}
	}
	?>
	
	<div class="post-half post-item col-24 col-sm-12 pt-1 px-0 pt-sm-4 px-sm-4 mb-5 mb-sm-0">
		<div class="img-wrapper">
			<a href="<?php echo $permalink; ?>" class="image d-inline-block"<?php echo !empty($post_image) ? ' style="background-image: url(' . $post_image . ');"' : ''; ?>></a>
		</div>
		<?php 
		if (!property_exists($data, 'ad_type')): ?>
		<div class="copy">
			<h2 class="title d-none d-sm-inline-block">
				<a href="<?php echo get_the_permalink($data->ID); ?>" class="post">
					<span>
						<span class="text"><?php echo get_the_title($data->ID); ?></span>
					</span>
				</a>
			</h2>
			<h3 class="title d-inline-block d-sm-none">
				<a href="<?php echo get_the_permalink($data->ID); ?>" class="post">
					<span>
						<span class="text"><?php echo get_the_title($data->ID); ?></span>
					</span>
				</a>
			</h3>
			<div class="footer-wrapper">
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
		</div>
		<?php 
		endif; ?>
	</div>
	<?php endforeach; ?>

</div>
<?php endif; ?>