<?php

/* Filename:  heroes.php
 * Description:  Responsible for loading up the different types of Heroes on the many different pages and posts.

*/
if (!defined('ABSPATH')) exit(0); 

global $main_categories, $global_site;

if (!empty($type)): ?>

	<div class="hero-header header-type-<?php echo $type; ?>">

	<?php if ($type == 'post'):

		$author = apply_filters('get_the_post_author_info', array(), $main_post);
		$post_image = get_field('featured_image', $main_post->ID);
		$date = get_the_date('M j, Y', $main_post->ID);
		$main_categories = apply_filters('get_the_primary_category_with_child', array(), $main_post->ID);
		$sponsored_post = get_field('is_sponsored', $main_post->ID); 

		if (empty($post_image))
		{
			$image_id = get_post_thumbnail_id($main_post->ID);
			$image_caption = get_post_meta($image_id, 'mga_photo_credit', true);
			$thumbnail_image = wp_get_attachment_image_src($image_id, "full");
			$post_image = !empty($thumbnail_image) ? $thumbnail_image[0] : '';
		}
		else
		{
			error_log(var_export($post_image, true));
			$image_caption = get_post_meta($post_image['id'], 'mga_photo_credit', true);
			// $image_caption = $post_image['caption'];
			$post_image = $post_image['url'];
		}

		// $categories = get_the_category($main_post->ID);
		/*
		if (!empty($categories))
			$category_link = get_category_link($categories[0]->term_id); 
		*/ ?>
		
		<div class="hero-body" style="background: linear-gradient(to bottom, rgba(56, 56, 56, 0.5) 100%, rgba(56, 56, 56, 0.5) 100%), url(<?php echo $post_image; ?>) no-repeat center center; background-size: cover;">
			<div class="container-fluid post-wrapper">
				<div class="overlay">
					<?php if (!empty($sponsored_post)): ?>
					<h5 class="sponsored">
						<span><?php _e('Sponsored Content', 'trazee'); ?></span>
					</h5>
					<?php endif; ?>
					<h1 class="title my-3 hero-post">
						<span><span class="text"><?php echo get_the_title($main_post->ID); ?></span></span>
					</h1>
					<?php
					if (!empty($author['name'])): ?>
							<p>by <?php echo !empty($author['link']) ? '<a href="' . $author['link'] . '" class="author-link"><span>' . $author['name'] . '</span></a>' : $author['name']; ?></p>
					<?php
					endif; ?>
					<span class="date mb-5"><?php echo $date; ?></span>

					<?php if (!empty($image_caption)): ?>
					<div class="caption-post px-4">
						<?php echo apply_filters('the_content', $image_caption); ?>
					</div>
					<?php endif; ?>
					<h5 class="categories highlight">
						<?php if (!empty($main_categories)): 
							if (!empty($main_categories['primary'])): ?>
								<a href="<?php echo esc_url($main_categories['primary']['link']); ?>"><?php echo $main_categories['primary']['title']; ?></a>
								<?php
								if (!empty($main_categories['child'])): ?>
								/ <a href="<?php echo esc_url($main_categories['child']['link']); ?>"><?php echo $main_categories['child']['title']; ?></a>
								<?php
								endif;
							endif;
						endif; ?>
					</h5>
				</div>
			</div>
		</div>


	<?php elseif ($type == 'home'):
		$post_image = get_field('featured_image', $main_post->ID);
		$author_name = $global_site == 'globalusa' ? get_field('post_author', $main_post->ID) : '';

		if (empty($post_image))
		{
			$image_id = get_post_thumbnail_id($main_post->ID);
			$image_caption = get_post_meta($image_id, 'mga_photo_credit', true);
			$thumbnail_image = wp_get_attachment_image_src($image_id, "full");
			$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
			$post_image = !empty($thumbnail_image) ? $thumbnail_image[0] : '';
		}
		else
		{
			$image_alt = $post_image['alt'];
			$image_caption = get_post_meta($post_image['id'], 'mga_photo_credit', true);
			$post_image = $post_image['url'];
		}

		$categories = apply_filters('get_the_primary_category_with_child', array(), $main_post->ID);

		if (!empty($post_image)): ?>
		<style>
		.hero-body a.pic-link:before {
			content: '';
			position: absolute;
			left: -20px;
			top: -20px;
			width: calc(100% + 40px);
			height: calc(100% + 40px);
			background: linear-gradient(to bottom, rgba(56, 56, 56, 0.25) 100%, rgba(56, 56, 56, 0.25) 100%), url(<?php echo $post_image; ?>) no-repeat center center;
			background-size: cover;
		}
		body.home .hero-body a.pic-link:before {
			-webkit-transform-origin: top left;
			/* -webkit-filter: blur(20px); */
		}
		.hero-body a.pic-link::before {
			content: '';
			position: absolute;
			left: -20px;
			top: -20px;
			width: calc(100% + 40px);
			height: calc(100% + 40px);
			background: linear-gradient(to bottom, rgba(56, 56, 56, 0.25) 100%, rgba(56, 56, 56, 0.25) 100%), url(<?php echo $post_image; ?>) no-repeat center center;
			background-size: cover;
		}
		body.home .hero-body a.pic-link::before {
			-webkit-transform-origin: top left;
			/* -webkit-filter: blur(20px); */
		}

		@media (max-width: 991px) {
			body.home .hero-body {
				min-height: initial;
				min-height: auto;
			}
			body.home .hero-body a.pic-link {
				display: none;
			}
		}

		</style>
		<?php 
		endif; ?>
		
		<div class="hero-body post-item">
			<a class="pic-link d-none d-md-inline-block" href="<?php the_permalink($main_post->ID); ?>"></a>
			<?php 
			if (is_front_page()): ?>
			<div class="container-fluid px-0 px-md-2">
				<div id="hero-content" class="row px-md-5 my-md-5 align-items-center">
					<div class="col-24 col-md-16 px-0 py-md-4 pb-0 px-md-3 image-wrapper">
						
						<a href="<?php the_permalink($main_post->ID); ?>"><img src="<?php echo $post_image; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid px-md-2 d-md-none d-lg-none" /></a>

						<div class="desc-wrapper">
							<div class="desc-inner px-2">
								<h5 class="categories highlight">
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
								<h1 class="title mt-md-4 mb-md-3">
									<a href="<?php the_permalink($main_post->ID); ?>" class="hero-post"><span><span class="text"><?php echo get_the_title($main_post->ID); ?></span></span></a>
								</h1>
								<?php if (!empty($author_name)): ?>
								<p>by <?php echo $author_name; ?></p>
								<?php endif; 
								$the_excerpt = apply_filters('tif_global_get_the_excerpt', '', $main_post->ID, 250);

								if (!empty($the_excerpt)): ?>
									<p class="d-none d-md-block the-excerpt"><?php echo $the_excerpt; ?></p>
								<?php
								endif; ?>
							</div>
						</div>
						
					</div>
					<div class="col-24 col-md-8 py-0 py-md-4 px-4 px-md-3">
						<p class="d-none d-md-flex mb-0 align-items-center justify-content-end">
							<a href="<?php the_permalink($main_post->ID); ?>" class="btn btn-white btn-arrow read-more"><?php _e('Read More', 'tif_global'); ?>
								<span class="caret-arrow"></span>
							</a>
						</p>
						<?php // get the author link last here... ?>
					</div>
				</div>
			</div>
				<?php if (!empty($image_caption)): ?>
			<div class="caption px-4">
				<?php echo apply_filters('the_content', $image_caption); ?>
			</div>
				<?php endif; ?>
			<?php 
			endif; ?>
		</div>
	<?php 
	elseif ($type == 'hometakeover'):
		if(function_exists('the_ad_placement') && placement_has_ads('takeover-ad')): ?>
		<div class="hero-body post-item takeover">
		<?php the_ad_placement('takeover-ad'); ?>
		</div>
	<?php 
		endif; ?>
	<?php 
	elseif ($type == 'category' || $type == 'author'): 
		if (!empty($title)): ?>
		<div class="headline pt-4">
			<h1><?php echo $title; ?></h1>
		</div>
	<?php endif;
		elseif ($type == 'alternative'):
			$post_image = get_field('featured_image', $main_post->ID);
			$main_categories = apply_filters('get_the_primary_category_with_child', array(), $main_post->ID);
			$sponsored_post = get_field('is_sponsored', $main_post->ID); 

			if (empty($post_image))
			{
				$image_id = get_post_thumbnail_id($main_post->ID);
				$image_caption = get_post_meta($image_id, 'mga_photo_credit', true);
				$thumbnail_image = wp_get_attachment_image_src($image_id, "full");
				$post_image = !empty($thumbnail_image) ? $thumbnail_image[0] : '';
			}
			else
			{
				$image_caption = get_post_meta($post_image['id'], 'mga_photo_credit', true);
				$post_image = $post_image['url'];
			} ?>
		<div class="hero-body" style="background: url(<?php echo $post_image; ?>) no-repeat center center; background-size: cover;">
			<div class="container-fluid post-wrapper">
				<div class="overlay d-flex align-items-center justify-content-center">
					<?php if (!empty($sponsored_post)): ?>
					<h5 class="sponsored m-0">
						<span><?php _e('Sponsored Content', 'trazee'); ?></span>
					</h5>
					<?php endif; ?>
					<h5 class="categories highlight m-0">
						<?php if (!empty($main_categories)): 
							if (!empty($main_categories['primary'])): ?>
								<a href="<?php echo esc_url($main_categories['primary']['link']); ?>"><?php echo $main_categories['primary']['title']; ?></a>
								<?php
								if (!empty($main_categories['child'])): ?>
								/ <a href="<?php echo esc_url($main_categories['child']['link']); ?>"><?php echo $main_categories['child']['title']; ?></a>
								<?php
								endif;
							endif;
						endif; ?>
					</h5>
				</div>
				<?php 
				if (!empty($image_caption)): ?>
				<div class="caption-post px-4 pt-2">
					<?php echo apply_filters('the_content', $image_caption); ?>
				</div>
				<?php 
				endif; ?>
			</div>
		</div>
	<?php
		endif; ?>
	</div>
<?php 
endif; ?>

