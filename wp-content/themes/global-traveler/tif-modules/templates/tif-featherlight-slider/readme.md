# Description
Uses the Featherlight jQuery plugin for a slider.  Should be fed images from the ACF Gallery Field.

# Usuage Example

```php

// Getting the Gallery images from an ACF Gallery Field.
$gallery_images = get_field('gallery_images');

if (!empty($gallery_images)):
	tif_get_template(tif_template_path('tif-featherlight-slider'), array(
		'gallery_images' => $gallery_images, 
		'show_first_slide' => array(
			'text_on_hover' => __('View The Gallery')
		), 
		'show_first_caption' => true, 
		'image_size' => 'gallery-image'
	));
endif;

```

