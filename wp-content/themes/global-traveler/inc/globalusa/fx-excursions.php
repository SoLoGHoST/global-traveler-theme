<?php

if (!defined('ABSPATH')) exit;

global $post, $page_id; ?>

<div id="fx-excursions" class="py-5 px-2">
	<div class="excursions-inner">
		<div class="introducing text-center">
			<p class="intro">Introducing</p>
		</div>
		<div class="excursions-heading text-center mt-4 py-2">
			<h1 class="my-0"><?php _e('FX Excursions', 'tif_global'); ?></h1>
			<p><?php the_field('fx_landing_header_blurb', 'option'); ?></p>
		</div>
		<?php 
		$posts = get_field('fx_landing_child_pages', 'option');
		if (!empty($posts)) : ?>
		<div class="excursions-landing-images d-flex justify-content-center align-items-stretch flex-wrap my-2">
			<?php foreach ($posts as $post) : setup_postdata($post); ?>
			<div class="image-item col-24 col-sm-8 my-2">
				<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
				<a href="<?php the_permalink($post->ID); ?>" style="background-image: url(<?php echo $image[0]; ?>);" class="d-flex justify-content-center align-items-stretch">
					<h2 class="my-0 d-flex justify-content-center align-items-center"><span><?php echo $post->post_title; ?></span></h2>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
		<?php 
		wp_reset_postdata(); 
		endif; ?>
	</div>
</div>