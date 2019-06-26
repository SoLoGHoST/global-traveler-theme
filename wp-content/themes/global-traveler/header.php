<?php

global $page_id, $is_home, $homepage_id, $is_mobile, $is_tablet, $hero_type, $home_video, $all_sites, $global_site;

$homepage_id = (int) get_option('page_on_front'); // Returns the ID of the Homepage!
$page_id = is_front_page() ? $homepage_id : get_queried_object_id();
$is_home = isset($is_home) ? $is_home : $homepage_id === $page_id;
$class = array('site-' . $global_site);

if (wp_is_mobile())
	$class[] = 'mobile';

// $class = wp_is_mobile() ? ' mobile' : ''; ?>

<!DOCTYPE html>
	<!--[if lt IE 9]><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><![endif]-->
	<!--[if lt IE 7]> <html lang="en" xmlns="http://www.w3.org/1999/xhtml" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]><html lang="en" xmlns="http://www.w3.org/1999/xhtml" class="no-js lt-ie9 lt-ie8 ie7"><![endif]-->
	<!--[if IE 8]><html lang="en" xmlns="http://www.w3.org/1999/xhtml" class="no-js lt-ie9 ie8"><![endif]-->
	<!--[if IE 9]><html lang="en" class="no-js ie9"><![endif]-->
	<!--[if (gt IE 9)|!(IE)]><html lang="en" class="no-js"><![endif]-->
	<!--[if !IE]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php
		do_action('tif_global_favicon_' . $global_site); ?>

<!-- 	<meta name="viewport" content="initial-scale=1, maximum-scale=1"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">
	<title><?php wp_title(' | ', true, 'right'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_directory');?>/js/required/html5shiv.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory');?>/js/required/respond.js" type="text/javascript"></script>
	<![endif]-->
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KX663FG');</script>
	<!-- End Google Tag Manager -->
	

	<?php 
	if (!empty($hero_type) && $hero_type == 'hometakeover')
		$class[] = 'hometakeover';

	wp_head(); ?>
	
</head>
<body <?php body_class(!empty($class) ? $class : array()); ?>>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KX663FG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
	$site_links = array();
	$temp = $all_sites;

	if (isset($temp[$global_site]))
		unset($temp[$global_site]);

	if (!empty($temp)) {
		foreach($temp as $site_key => $site) {
			$site_links[] = array(
				'attrs' => 'id="link-' . $site_key . '" data-site="' . $site_key . '"',
				'class' => array('external-link', 'd-none', 'd-sm-inline-block', 'api-link'),
				'href' => '#',
				'title' => $site['title']
			);
		}
	}

	$site_links[] = array(
		'class' => array('external-link', 'd-none', 'd-sm-inline-block'),
		'href' => 'http://www.globaltravelerusa.com/fx-excursions/',
		'target' => '_blank',
		'title' => __('FX Excursions')
	);
	$site_links[] = array(
		'class' => array('tagline', 'mx-auto', 'ml-sm-auto', 'mr-sm-0'),
		'title' => get_bloginfo('description')
	);

	$args = array(
		'topline' => array(
			'classes' => array(
				'main' => 'position-relative',
				'menu' => array('d-flex', 'w-100', 'align-items-center')
			),
			'depth' => 1, 
			'links' => $site_links,
			'wrap' => array(
				'before' => '<div class="container-fluid"><div class="row">',
				'after' => '</div></div>'
			)
		), 
		'main_menu' => array_merge(
			array(
				'classes' => array(
					'main' => array('navbar-light'), 
					'menu' => array('align-self-start', 'flex-row'), 
					'container' => ''
				),
				'location' => 'main_navigation', 
				'depth' => 2
			), array('logo' => $all_sites[$global_site]['logo'])
		)
	);

	tif_get_template(tif_template_path('header-1'), $args);
	?>

	<div id="<?php echo empty($is_home) ? 'main-content' : 'home-content'; ?>">
