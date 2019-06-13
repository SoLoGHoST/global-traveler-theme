# Description
Centered full width CTA with buttons

# Data Structures

```
$cta_2_data = array(
	'wrapper_classes' => 'col-24',
	'order' => array(
		array(
			'type' => 'title',
			'classes' => '',
			'data' => array(
				'text' => 'Test Text'
			)
		),
		array(
			'type' => 'button',
			'classes' => 'btn btn-primary',
			'data' => array(
				'text' => 'Contact Form',
				'href' => '#'
			)
		),
		array(
			'type' => 'copy',
			'classes' => '',
			'data' => array(
				'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
			)
		),
		array(
			'type' => 'text_link',
			'classes' => '',
			'data' => array(
				'text' => 'Text Link',
				'href' => '#'
			)
		)
	)
);

tif_get_template(tif_template_path('cta-2'), array($cta_2_data));
```