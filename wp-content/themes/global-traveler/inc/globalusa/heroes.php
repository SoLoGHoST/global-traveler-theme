<?php

/* Filename:  heroes.php
 * Description:  Responsible for loading up the different types of Heroes on the many different pages and posts.

*/
if (!defined('ABSPATH')) exit(0); 

global $main_categories, $post;

if (!empty($type)): ?>

	<div class="hero-header">
	<?php
	if (!empty($main_post)):

		$categories = apply_filters('get_the_primary_category_with_child', array(), $main_post->ID);

		if ($type == 'post'):

			$author = apply_filters('get_the_post_author_info', array(), get_field('article_author', $main_post->ID));

			$post_image = get_field('featured_image', $main_post->ID);
			$date = get_the_date('M j, Y', $main_post->ID);
			$main_categories = apply_filters('get_the_primary_category_with_child', array(), $main_post->ID);
			$sponsored_post = get_field('is_sponsored', $main_post->ID); 

			$the_post_type = get_post_type($main_post);

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
			*/
			$style = '';
			if ($the_post_type != 'deal') {
				if (!empty($post_image))
					$style = ' style="background: linear-gradient(to bottom, rgba(0, 54, 70, 0.3) 100%, rgba(0, 54, 70, 0.3) 100%), url(' . $post_image . ') no-repeat center center; background-size: cover;"';
				/*
				if ($the_post_type == 'blog' && !empty($post_image)) {
					$style = ' style="background: linear-gradient(to bottom, rgba(0, 54, 70, 0.3) 100%, rgba(0, 54, 70, 0.3) 100%), url(' . $post_image . ') no-repeat center center; background-size: cover;"';
				} else if ($the_post_type != 'blog') {
					$style = ' style="background: linear-gradient(to bottom, rgba(0, 54, 70, 0.3) 100%, rgba(0, 54, 70, 0.3) 100%), url(' . $post_image . ') no-repeat center center; background-size: cover;"';
				}
				*/
			} ?>
			<div class="hero-body<?php echo !empty($excursion_page) ? ' fx-excursions-hero' : ''; ?><?php echo $the_post_type != 'deal' && empty($post_image) ? ' small-hero' : ''; ?>"<?php echo $style; ?>>
				<div class="container-fluid <?php echo is_page() || !empty($page) ? 'page' : 'post'; ?>-wrapper">
					<div class="overlay">
						<?php if (!empty($sponsored_post)): ?>
						<h5 class="sponsored">
							<span><?php _e('Sponsored Content', 'trazee'); ?></span>
						</h5>
						<?php endif; ?>
						<?php 
						if (!empty($excursion_page) || !empty($is_excursions_post)): ?>
						<div class="excursion-hero-wrapper">
							<img src="<?php echo apply_filters('get_global_site_directory_path_uri', '', 'images', 'fx_excursions.png'); ?>" alt="FX Excursions" class="fx-img" />
							<?php
							if (!empty($is_excursions_post)): 
								$excursions_category = apply_filters('get_the_primary_category', array(), $main_post->ID, 'excursions_category_type');
								if (!empty($excursions_category)): ?>

							<h3 class="title post">
								<span><span class="text"><?php echo $excursions_category['title']; ?></span></span>
							</h3>
							<?php
								endif;
							else: ?>
							<h3 class="title post">
								<span><span class="text"><?php echo get_the_title($main_post->ID); ?></span></span>
							</h3>
							<?php
							endif; ?>
						</div>
						<?php
						else: ?>
						<h1 class="title my-3 post">
							<span><span class="text"><?php echo get_the_title($main_post->ID); ?></span></span>
						</h1>
						<?php
						endif; ?>
						<?php

						if (!empty($author['name'])): ?>
							<p>by <?php echo !empty($author['link']) ? '<a href="' . $author['link'] . '" class="author-link"><span>' . $author['name'] . '</span></a>' : $author['name']; ?></p>
						<?php
						endif;
						if (!is_page() && empty($is_excursions_post) && empty($page)): ?>
						<span class="date mb-5"><?php echo $date; ?></span>
						<?php
						endif; ?>

						<?php 
						if (!empty($image_caption)): ?>
						<div class="caption-post px-4">
							<?php echo apply_filters('the_content', $image_caption); ?>
						</div>
						<?php 
						endif;
						if (!empty($main_categories)): ?>
						<h5 class="categories highlight-blue">
							<?php
							if (!empty($main_categories['primary'])): ?>
								<a href="<?php echo esc_url($main_categories['primary']['link']); ?>"><?php echo $main_categories['primary']['title']; ?></a>
								<?php
								if (!empty($main_categories['child'])): ?>
								/ <a href="<?php echo esc_url($main_categories['child']['link']); ?>"><?php echo $main_categories['child']['title']; ?></a>
								<?php
								endif;
							endif; ?>
						</h5>
						<?php
						endif; ?>
					</div>
				</div>
			</div>
		<?php
		elseif ($type == 'category' || $type == 'author'): 
			if (!empty($title)): ?>
			<div class="category-headline pt-4 text-center">
				<h5 class="categories"><?php echo $title; ?></h5>
			</div>
			<?php 
			endif;
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
			<div class="container-fluid <?php echo is_page() || !empty($page) ? 'page' : 'post'; ?>-wrapper">
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
		endif; 
	else: 
		if ($type == 'archive'): ?>

			<div class="hero-body">
				<div class="container-fluid <?php echo is_archive() ? 'archive' : (is_page() || !empty($page) ? 'page' : 'post'); ?>-wrapper">
					<div class="overlay">
						<?php if (!empty($sponsored_post)): ?>
						<h5 class="sponsored">
							<span><?php _e('Sponsored Content', 'trazee'); ?></span>
						</h5>
						<?php endif; ?>
						<div class="short-hero-wrapper">
							<?php 

							if (!empty($title)): ?>
								<h3 class="title post">
									<span><span class="text"><?php echo $title; ?></span></span>
								</h3>
							<?php
							else:
								$queried_object = get_queried_object();
								if (!empty($queried_object)):
									$labels = get_post_type_labels($queried_object);

									if (!empty($labels)): ?>
										<h1 class="title post">
											<span><span class="text"><?php echo $labels->name; ?></span></span>
										</h1>
								<?php
									endif;
								endif;
							endif; ?>
						</div>

					</div>
				</div>
			</div>

	<?php
		elseif ($type == 'home'): 
			// $slider_posts = get_field('slider_posts');
			if (!empty($slider_posts)): ?>
				<div class="posts-slider col-xs-24 no-pad">
				<?php
				foreach($slider_posts as $post_index => $post): setup_postdata($post); 

					$post_image = get_field('featured_image', $post->ID);


					if (empty($post_image))
					{
						$image_id = get_post_thumbnail_id($post->ID);
						$image_caption = wp_get_attachment_caption($image_id);
						$thumbnail_image = wp_get_attachment_image_src($image_id, "full");
						$post_image = !empty($thumbnail_image) ? $thumbnail_image[0] : '';
					}
					else
					{
						$image_caption = $post_image['caption'];
						$post_image = $post_image['url'];
					}

					$index = ($post_index + 1); ?>
					<div class="slide-item">
						<style>

							body.site-globalusa .posts-slider .slide-item.slider-image-hover-<?php echo $index; ?> .image {

								background: linear-gradient(to bottom, rgba(56, 56, 56, 0.3) 100%, rgba(56, 56, 56, 0.3) 100%), url('<?php echo $post_image; ?>') no-repeat center center !important;
								background-size: cover !important;
								background-position: 50% 50% !important;
								/*
								width: 100% !important;
								height: 100vh !important;
								*/
								background-repeat: no-repeat !important;
								-webkit-opacity: 	0.8;
								-moz-opacity: 		0.8;
								opacity: 		0.8;
								filter: alpha(opacity=80) progid:DXImageTransform.Microsoft.Alpha(opacity=80);
								/*
								-webkit-transform: perspective(1000px) !important;
								transform: perspective(1000px) !important;
								*/
							}
						</style>
						<div class="image"<?php echo !empty($post_image) ?' style="background: linear-gradient(to bottom, rgba(56, 56, 56, 0.4) 100%, rgba(56, 56, 56, 0.4) 100%), url(' . $post_image . ') no-repeat center center; background-size: cover; -webkit-backface-visibility: hidden; backface-visibility: hidden;"' : ''; ?>>
							<a href="<?php the_permalink(); ?>" class="post-link" target="_blank"></a>
							<div class="details-wrapper">
								<a href="<?php the_permalink(); ?>" class="post-link" target="_blank"></a>
								<div class="details">
									<a href="<?php the_permalink(); ?>" class="post-link" target="_blank"></a>
									<div class="info d-flex justify-content-center flex-column">
										<h1><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h1>
										<p class="mt-3 mb-2"><?php the_date('F j, Y'); ?></p>
									</div>
									<div class="categories">
										<h5 class="categories highlight">
											<?php 
											$categories = apply_filters('get_the_primary_category_with_child', array(), $post->ID);
											if (!empty($categories)): 
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
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				endforeach;
				wp_reset_postdata(); ?>
				</div>
				<div class="next"></div>
			<?php
			endif; ?>
			<?php
			/*
			<pre style="min-height: 500px; width: 100%; overflow-y: auto;"><?php echo var_dump($slider_posts); ?></pre>
			*/ ?>
		<?php
		elseif ($type == 'tag'):
			$image_caption = !empty($tag_image) && !empty($tag_image['caption']) ? $tag_image['caption'] : '';
			$post_image = !empty($tag_image) && !empty($tag_image['url']) ? $tag_image['url'] : ''; ?>

			<div class="hero-body fx-excursions-hero" style="background: linear-gradient(to bottom, rgba(0, 54, 70, 0.3) 100%, rgba(0, 54, 70, 0.3) 100%), url(<?php echo $post_image; ?>) no-repeat center center; background-size: cover;">
				<div class="container-fluid tag-wrapper">
					<div class="overlay">
						<div class="excursion-hero-wrapper">
							<img src="<?php echo apply_filters('get_global_site_directory_path_uri', '', 'images', 'fx_excursions.png'); ?>" alt="FX Excursions" class="fx-img" />
							<h3 class="title post">
								<span><span class="text"><?php single_term_title(); ?></span></span>
							</h3>
						</div>
						<?php 
						if (!empty($image_caption)): ?>
						<div class="caption-post px-4">
							<?php echo apply_filters('the_content', $image_caption); ?>
						</div>
						<?php 
						endif; ?>
					</div>
				</div>
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
			<div class="category-headline pt-4 text-center">
				<h5 class="categories"><?php echo $title; ?></h5>
			</div>
			<?php 
			endif;
		endif;
	endif; ?>
</div>
<?php
endif; ?>