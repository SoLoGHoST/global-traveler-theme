# Description
Side by side images with text on top

# Data Structures

```
$cta_4_data = array(
	'wrapper_classes' => 'col-24',
	'order' => array(
		array(
			'type' => 'block',
			'classes' => 'col-24',
			'data' => array(
				array(
					'classes' => 'col-24 col-sm-12',
					'img_src' => 'https://placehold.it/800x600.png',
					'title' => 'Call to Action Goes Here!',
					'copy' => 'Alternate text goes here if we need it',
					'button_text' => 'Contact Form',
					'button_href' => '#',
					'button_classes' => 'btn btn-primary'
				),
				array(
					'classes' => 'col-24 col-sm-12',
					'img_src' => 'https://placehold.it/800x600.png',
					'title' => 'Call to Action Goes Here!',
					'copy' => 'Alternate text goes here if we need it',
					'button_text' => 'Contact Form',
					'button_href' => '#',
					'button_classes' => 'btn btn-primary'
				)
			)
		)
	)
);

tif_get_template(tif_template_path('cta-4'), array($cta_4_data));
```