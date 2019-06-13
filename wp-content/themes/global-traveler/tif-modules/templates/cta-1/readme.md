# Description
CTA with two areas side by side

# Data Structures

```
$cta_1_data = array(
	'wrapper_classes' => 'col-24 offset-sm-4 col-sm-16 offset-md-1 col-md-22 offset-lg-2 col-lg-22',
	'order' => array(
		array(
			'type' => 'buttons',
			'classes' => 'col-24 offset-md-2 col-md-7',
			'data' => array(
				'buttons' => array(
					'<a href="tel:" class="details">610.293.0900</a>',
					'<a href="mailto:" class="details">info@sitename.com</a>',
					'<a href="#" class="btn btn-primary">Contact Form</a>'
				)
			)
		),
		array(
			'type' => 'block',
			'classes' => 'col-24 col-md-15',
			'data' => array(
				'title' => 'Talk to Us',
				'copy' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam convallis scelerisque nulla sit amet varius. Donec luctus leo ac elit vehicula, eu maximus neque accums.'	
			)
		),
		
	)
);

tif_get_template(tif_template_path('cta-1'), array($cta_1_data));
```