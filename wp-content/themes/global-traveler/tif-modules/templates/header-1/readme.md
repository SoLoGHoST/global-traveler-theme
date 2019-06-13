# Description
Wordpress Header with the option of topline and main menu that links to a menu location, or provided links with Logo capabilities for each menu.

# Usuage Example

Note: Any classes that get defined can either be a string or an array of classes.

```php

$args = array(
	// Exclude 'topline' if this menu is not needed/used
	'topline' => array(
		'classes' => array(
			'main' => 'tmenu', // appended main wrapper classes
			'container' => 'd-none', // appended menu container classes
			'menu' => '' // appended menu classes
		),
		// If not needed, no need to define this key in the array...
		'logo' => array(
			'image' => get_stylesheet_directory_uri() . '/images/ceo-logo-inverse.svg', 
			'classes' => array(
				'link' => array('col-24', 'text-center', 'order-last'),
				'image' => 'default-top'
			),
			'width' => 106, 
			'height' => 39
		),
		'location' => 'topline-menu', // If location is defined, will use the menu location, otherwise will use links
		'links' => array(), // Adds ability to enter menu links manually
		'depth' => 1, // How many levels should this menu sink down to (default: 1)
		// The before/after keys below are optional ofcourse and both share the same options.
		/*
		Provides the ability to either hook in a filter for outputing any content needed either before or after the topline menu, 
		either with defined 'filters' found in the themes functions.php file (filter name => default value), or with 'content' (basic html or whatever)
		If you don't require these elements, than you don't even have to include these keys in the topline array.
		*/
		'before' => array(
			'class' => 't-thin', // Class for the object
			'filters' => array('custom_before_topline_content_filter' => ''), // Uses as many filters you need to output the content in the element, with the default value set to an empty string.
		),
		'after' => array(
			'class' => 'row',
			'content' => '<p class="col-24 col-sm-12">Some content in here.</p><p class="col-24 col-sm-12">Some more content in here.</p>'
		),
		// Wrap the logo and links inside of container elements if needed
		'wrap' => array(
			'before' => '<div class="container"><div class="row">',
			'after' => '</div></div>'
		)
	), 
	'main_menu' => array(
		'classes' => array(
			'main' => array('navbar-expand-md', 'navbar-light'),
			'container' => '',
			'menu' => 'ml-auto'
		),
		'logo' => array(
			'image' => get_stylesheet_directory_uri() . '/images/ceo-logo.svg', 
			'classes' => array(
				'link' => 'default-top',
				'image' => ''
			), 
			'width' => 155, 
			'height' => 101
		),
		'location' => '', // Menu Location Name, if this is empty, or does not exist, links will be used instead.
		'links' => array( // Adds ability to enter menu links manually
			0 => array(
				'class' => 'external-link',
				'href' => 'http://www.google.com',
				'target' => '_blank',
				'title' => __('Go to Google')
			),
			1 => array(
				'class' => 'internal-link',
				'href' => site_url(),
				'title' => __('Go to Homepage')
			)
			// etc. etc.
		),
		'depth' => 2,
		'before' => array(
			'class' => '',
			'content' => '<div>Content in here that will go before the main menu, if needed.</div>'
		),
		'after' => array(
			'class' => 'my-class',
			'filters' => array('custom_after_main_menu', '')
		),
		'wrap' => array()
	)
);

tif_get_template(tif_template_path('header-1'), $args); 

```
