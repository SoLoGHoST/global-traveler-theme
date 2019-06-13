# Description
Centered CTA with 3 columns

# Data Structures

```
$cta_3_data = array(
	'wrapper_classes' => 'col-24',
	'order' => array(
		array(
			'type' => 'title',
			'classes' => 'col-24',
			'data' => array(
				'classes' => '',
				'text' => 'Call to action goes here!'
			)
		),
		array(
			'type' => 'block',
			'classes' => 'col-24',
			'data' => array(
				array(
					'type' => 'button',
					'title' => 'Button 1',
					'classes' => 'col-24 col-sm-8',
					'img_src' => 'https://placehold.it/600x600.png',
					'img_classes' => '',
					'href' => '#'
				),
				array(
					'type' => 'button',
					'title' => 'Button 2',
					'classes' => 'col-24 col-sm-8',
					'img_src' => 'https://placehold.it/600x600.png',
					'img_classes' => '',
					'href' => '#'
				),
				array(
					'type' => 'button',
					'title' => 'Button 3',
					'classes' => 'col-24 col-sm-8',
					'img_src' => 'https://placehold.it/600x600.png',
					'img_classes' => '',
					'href' => '#'
				)
			)
		)
	)
);

tif_get_template(tif_template_path('cta-3'), array($cta_3_data));
```