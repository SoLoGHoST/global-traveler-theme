<?php

if (!empty($gallery_images)): 
	if (!empty($show_first_slide)): ?>
	<div class="row tif-featherlight-slider">
		<div class="first-image col-24">
			<a class="featherlight-link" href="javascript:void(0);">
				<img src="<?php echo $gallery_images[0]['url']; ?>" class="img-fluid" alt="<?php echo (!empty($gallery_images[0]['alt']) ? $gallery_images[0]['alt'] : $gallery_images[0]['title']); ?>" />
				<?php if (!empty($show_first_slide['text_on_hover'])): ?>

				<h3><span><?php echo $show_first_slide['text_on_hover']; ?></span></h3>
				<?php endif; ?>
			</a>
		</div>
		<?php 
		if (!empty($show_first_caption) && !empty($gallery_images[0]['caption'])): ?>
		<div class="caption col-24 my-3">
			<?php echo apply_filters('the_content', $gallery_images[0]['caption']); ?>
		</div>
		<?php 
		endif; ?>
	</div>
	<?php endif; ?>
	<div data-featherlight-gallery data-featherlight-filter="a" id="tif-featherlight-slider" style="display: none;">
		<?php
		foreach ($gallery_images as $key => $images):
			if (empty($key)): ?>
			<a class="featherlight-first-slide" href="<?php echo (!empty($image_size) && !empty($images['sizes'][$image_size]) ? $images['sizes'][$image_size] : $images['url']); ?>">
				<img src="<?php echo (!empty($image_size) && !empty($images['sizes'][$image_size]) ? $images['sizes'][$image_size] : $images['url']); ?>" alt="<?php echo $images['alt']; ?>" />
			</a>
			<?php 
			else: ?>
			<a href="<?php echo (!empty($image_size) && !empty($images['sizes'][$image_size]) ? $images['sizes'][$image_size] : $images['url']); ?>">
				<img src="<?php echo (!empty($image_size) && !empty($images['sizes'][$image_size]) ? $images['sizes'][$image_size] : $images['url']); ?>" alt="<?php echo $images['alt']; ?>" />
			</a>
			<?php
			endif; 
		endforeach; ?>
	</div>
<?php 
endif; ?>





