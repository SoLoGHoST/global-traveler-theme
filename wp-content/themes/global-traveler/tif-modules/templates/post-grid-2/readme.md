# Description
Post list template with heading, descripption and button

# Data Structures

```
$post_grid_2_data = array(
	'wrapper_classes' => 'col-24',
	'order' => array(
		array(
			'type' => 'title',
			'classes' => 'col-24 no-pad',
			'data' => array(
				'classes' => 'test',
				'text' => 'Featured Projects'
			)
		),
		array(
			'type' => 'block',
			'classes' => 'col-24 no-pad',
			'data' => array(
				array(
					'classes' => 'col-24',
					'small_title' => 'Small Title',
					'title' => 'Title Goes Here',
					'copy' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'button_href' => '#',
					'button_target' => '_blank',
					'button_text' => 'Learn More',
					'button_classes' => ''
				)
			)
		)
	)
);

tif_get_template(tif_template_path('post-grid-2'), array($post_grid_2_data));
```