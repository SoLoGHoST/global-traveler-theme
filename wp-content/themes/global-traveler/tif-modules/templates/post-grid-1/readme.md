# Description
Posts in 2 columns with an over and text

# Data Structures

```
$post_grid_1_data = array(
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
					'classes' => 'col-24 col-sm-12',
					'img_src' => 'https://placehold.it/800x600.png',
					'title' => 'Title Goes Here',
					'copy' => 'Category goes here',
					'href' => '#'
				),
				array(
					'classes' => 'col-24 col-sm-12',
					'img_src' => 'https://placehold.it/800x600.png',
					'title' => 'Title Goes Here',
					'copy' => 'Category goes here',
					'href' => '#'
				),
				array(
					'classes' => 'col-24 col-sm-12',
					'img_src' => 'https://placehold.it/800x600.png',
					'title' => 'Title Goes Here',
					'copy' => 'Category goes here',
					'href' => '#'
				),
				array(
					'classes' => 'col-24 col-sm-12',
					'img_src' => 'https://placehold.it/800x600.png',
					'title' => 'Title Goes Here',
					'copy' => 'Category goes here',
					'href' => '#'
				),
				array(
					'classes' => 'col-24 col-sm-12',
					'img_src' => 'https://placehold.it/800x600.png',
					'title' => 'Title Goes Here',
					'copy' => 'Category goes here',
					'href' => '#'
				),
				array(
					'classes' => 'col-24 col-sm-12',
					'img_src' => 'https://placehold.it/800x600.png',
					'title' => 'Title Goes Here',
					'copy' => 'Category goes here',
					'href' => '#'
				),
				array(
					'classes' => 'col-24 col-sm-12',
					'img_src' => 'https://placehold.it/800x600.png',
					'title' => 'Title Goes Here',
					'copy' => 'Category goes here',
					'href' => '#'
				),
				array(
					'classes' => 'col-24 col-sm-12',
					'img_src' => 'https://placehold.it/800x600.png',
					'title' => 'Title Goes Here',
					'copy' => 'Category goes here',
					'href' => '#'
				),
				array(
					'classes' => 'col-24 col-sm-12',
					'img_src' => 'https://placehold.it/800x600.png',
					'title' => 'Title Goes Here',
					'copy' => 'Category goes here',
					'href' => '#'
				),
				array(
					'classes' => 'col-24 col-sm-12',
					'img_src' => 'https://placehold.it/800x600.png',
					'title' => 'Title Goes Here',
					'copy' => 'Category goes here',
					'href' => '#'
				)
			)
		)
	)
);

tif_get_template(tif_template_path('post-grid-1'), array($post_grid_1_data));
```