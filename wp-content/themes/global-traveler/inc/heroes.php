<?php

/* Filename:  heroes.php
 * Description:  Responsible for loading up the different types of Heroes on the many different pages and posts.

*/
if (!defined('ABSPATH')) exit(0); 

global $main_categories;

if (!empty($type)): ?>

	<div class="hero-header">

	<?php if ($type == 'post'):

		$author_name = get_field('post_author', $main_post->ID);
		$post_image = get_field('featured_image', $main_post->ID);
		$date = get_the_date('M j, Y', $main_post->ID);
		$main_categories = apply_filters('get_the_primary_category_with_child', array(), $main_post->ID);
		$sponsored_post = get_field('is_sponsored', $main_post->ID); 

		if (empty($post_image))
		{
			$image_id = get_post_thumbnail_id($main_post->ID);
			$image_caption = wp_get_attachment_caption($image_id);
			$thumbnail_image = wp_get_attachment_image_src($image_id, "full");
			$post_image = !empty($thumbnail_image) ? $thumbnail_image[0] : '';
		}
		else
		{
			$image_caption = $post_image['caption'];
			$post_image = $post_image['url'];
		}

		// $categories = get_the_category($main_post->ID);
		/*
		if (!empty($categories))
			$category_link = get_category_link($categories[0]->term_id); 
		*/ ?>
		
		<div class="hero-body" style="background: linear-gradient(to bottom, rgba(0, 54, 70, 0.3) 100%, rgba(0, 54, 70, 0.3) 100%), url(<?php echo $post_image; ?>) no-repeat center center; background-size: cover;">
			<div class="container-fluid post-wrapper">
				<div class="overlay">
					<?php if (!empty($sponsored_post)): ?>
					<h5 class="sponsored">
						<span><?php _e('Sponsored Content', 'trazee'); ?></span>
					</h5>
					<?php endif; ?>
					<h1 class="title my-3 post">
						<span><span class="text"><?php echo get_the_title($main_post->ID); ?></span></span>
					</h1>
					<?php if (!empty($author_name)): ?>
					<p>by <?php echo $author_name; ?></p>
					<?php endif; ?>
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
		$author_name = get_field('post_author', $main_post->ID);

		if (empty($post_image))
		{
			$image_id = get_post_thumbnail_id($main_post->ID);
			$image_caption = wp_get_attachment_caption($image_id);
			$thumbnail_image = wp_get_attachment_image_src($image_id, "full");
			$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
			$post_image = !empty($thumbnail_image) ? $thumbnail_image[0] : '';
		}
		else
		{
			$image_alt = $post_image['alt'];
			$image_caption = $post_image['caption'];
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
			background: url(<?php echo $post_image; ?>) no-repeat center center;
			background-size: cover;
			z-index: -1;
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
			background: url(<?php echo $post_image; ?>) no-repeat center center;
			background-size: cover;
			z-index: -1;
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
				<div id="hero-content" class="row px-md-5 my-md-5 align-items-start">
					<div class="col-24 col-md-12 px-0 py-md-4 pb-0 px-md-3 image-wrapper">
						
						<a href="<?php the_permalink($main_post->ID); ?>"><img src="<?php echo $post_image; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid px-md-2 d-sm-none d-md-none d-lg-none" /></a> 
						
					</div>
					<div class="col-24 col-md-12 py-0 py-md-4 px-4 px-md-3 desc-wrapper">
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
							<h1 class="title">
								<a href="<?php the_permalink($main_post->ID); ?>" class="post"><span><span class="text"><?php echo get_the_title($main_post->ID); ?></span></span></a>
							</h1>
							<?php if (!empty($author_name)): ?>
							<p>by <?php echo $author_name; ?></p>
							<?php endif; ?>
						</div>
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
	elseif ($type == 'category'): 
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
				$image_caption = wp_get_attachment_caption($image_id);
				$thumbnail_image = wp_get_attachment_image_src($image_id, "full");
				$post_image = !empty($thumbnail_image) ? $thumbnail_image[0] : '';
			}
			else
			{
				$image_caption = $post_image['caption'];
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

