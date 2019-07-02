<?php
/**
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * @package WordPress
 * @subpackage TIF Bootstrap
 * @since TIF Global Traveler 1.0
 */

global $instagram_access_token, $all_sites, $global_site;

// https://www.instagram.com/oauth/authorize/?client_id=[Client ID]&redirect_uri=[Redirect URI]&response_type=token&scope=public_content

$instagram_access_token = array(
	'trazeetravel' => '1317793634.c13f70a.408e1346c2c040c397f3220294721747',
	'whereverfamily' => '5717731839.3a1c106.11d5eb7c72394b7995cd9e1faa516865',
	'globaltravelermag' => '1166366416.436b131.30d4058113894d67b82585059ca34e6f'
);

$all_sites = array(
	'globalusa' => array(
		'title' => __('Global Traveler', 'tif_global'),
		'search_placeholder' => __('Global Traveler', 'tif_global'),
		'instagram_tag' => __('globility', 'tif_global'),
		'logo' => array(
			'image' => get_stylesheet_directory_uri() . '/images/globalusa-logo.svg',
			'classes' => array(
				'link' => 'default-top order-2',
				'image' => '',
				'button' => 'order-1',
			), 
			'width' => 175,
			'height' => 55
		),
		'url' => 'https://global-traveler-cp.local'
	),
	'trazeetravel' => array(
		'title' => __('Trazee Travel', 'tif_global'),
		'search_placeholder' => __('Trazee', 'tif_global'),
		'instagram_tag' => __('TrazeeTravel', 'tif_global'),
		'logo' => array(
			'image' => get_stylesheet_directory_uri() . '/images/trazee-logo.svg',
			'classes' => array(
				'link' => 'default-top order-2',
				'image' => '',
				'button' => 'order-1',
			), 
			'width' => 208,
			'height' => 38
		),
		'url' => 'https://trazee-travel-cp.local'
	),
	'whereverfamily' => array(
		'title' => __('WhereverFamily', 'tif_global'),
		'search_placeholder' => __('WhereverFamily', 'tif_global'),
		'instagram_tag' => __('WhereverFamily', 'tif_global'),
		'logo' => array(
			'image' => get_stylesheet_directory_uri() . '/images/wherever-logo.svg',
			'classes' => array(
				'link' => 'default-top order-2',
				'image' => '',
				'button' => 'order-1',
			), 
			'width' => 300,
			'height' => 26
		),
		'url' => 'https://wherever-family.local'
	)
);

// This prevents other sites from stealing content that pertains to this site!
// Disallows frames and iframes stealing site's bandwidth...
add_action('send_headers', 'send_frame_options_header', 10, 0);

include(get_template_directory() . '/tif-modules/tif-modules.php');
include(get_template_directory() . '/tif-global-api.php');

add_image_size('thumbnail_1', 700, 9999);
add_image_size('thumbnail_2', 700, 400);
add_image_size('cta_thumbnail', 180, 9999);

/*******************************************************************************
	Code below should ONLY get run on the Development Sever
	Fixes broken images due to the copyright symbol in filenames.
	Usually localhost (IP: 127.0.0.1)
*******************************************************************************/
add_filter('wp_get_attachment_image_src', 'tif_global_get_attachment_image_src', 10, 4);

function tif_global_get_attachment_image_src($image, $attachment_id, $size, $icon)
{
	// The string replacements are only really needed for the Trazee Travel site so far, but doesn't hurt to replace on any of them really...
	if (defined('TIF_DEVELOPMENT_SERVER') && !empty(TIF_DEVELOPMENT_SERVER)) {
		if (!empty($image) && !empty($image[0])) {
			$image[0] = str_replace('©', '%A9', $image[0]);
		}
	}
	return $image;
}


function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/js/required/jquery.min.js', array(), '3.0.0' );
    wp_deregister_script( 'jquery-migrate' );
    wp_register_script( 'jquery-migrate', "https://code.jquery.com/jquery-migrate-3.0.0.min.js", array(), '3.0.0' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

function global_traveler_customize_register($wp_customize)
{

	$wp_customize->add_section('tif_global_section', array(
		'title'      => __('Site Specific Settings', 'tif_global'),
		'priority'   => 30
	));

	/*
	Need to add_setting and add_control for each setting in the tif_global_section section!
	*/
	$wp_customize->add_setting('tif_global_site', array(
		'default' => 'trazeetravel',
		'type' => 'theme_mod', // This is the default, but just in case wordpress decides to change the default 1 day
		// 'transport'=>'postMessage' // If needed, this will disable the automatic refresh when changing options.
	));

	$wp_customize->add_control(
		'global_traveler_site',
		array(
			'label'    => __('Select your Global Traveler Site', 'tif_global'),
			'section'  => 'tif_global_section',
			'settings' => 'tif_global_site',
			'type'     => 'select',
			'choices'  => array(
				'trazeetravel' => 'Trazee Travel',
				'whereverfamily' => 'Wherever Family',
				'globalusa' => 'Global Traveler'
			)
		)
	);
}
add_action('customize_register', 'global_traveler_customize_register');

//------------------------------------------------//
//---------------- ENQUEUE STYLES ----------------//
//------------------------------------------------//
function tif_scripts() {

	global $post, $home_video, $global_site;

	$dependants = array();

	if (empty($global_site)) {
		$global_site = get_theme_mod('tif_global_site');
		$global_site = !empty($global_site) ? $global_site : 'trazeetravel';
	}

    wp_register_script('ajax-scroll-script', get_stylesheet_directory_uri() . '/js/ajax-scroll.js', array('jquery'), '0.0.3');
    wp_register_script('tif-video-script', get_stylesheet_directory_uri() . '/js/tif-video.js', array('jquery'), '0.0.3');
    wp_register_script('script-slick-slider', get_stylesheet_directory_uri() . '/js/slick.min.js', array('jquery'), '1.8.0');

    if (!empty($global_site) && $global_site == 'globalusa' && is_front_page())
		$dependants[] = 'script-slick-slider';

    if (!empty($home_video))
    	$dependants[] = 'tif-video-script';

    if (!empty($post) && is_object($post))
    	$hero_type = get_field('hero_type', $post->ID);

    if (is_post_type_archive('post') || is_search() || (is_singular() && $post->post_type == 'post') || is_category() || is_author() || (!empty($post) && is_object($post) && ((is_page() && is_front_page()) || ($post->post_type == 'post' && is_tag()))))
	{
		$dependants[] = 'ajax-scroll-script';

		wp_localize_script('ajax-scroll-script', 'Scroll', array(
			'ajax_url' => admin_url('admin-ajax.php'),
			'haspostinhero' => is_front_page() || (!empty($hero_type) && $hero_type == 'home') ? true : false,
			'reversePattern' => is_front_page() ? true : false,
			'is_home' => is_front_page() ? true : false,
			'scroll_posts_nonce' => wp_create_nonce('scroll-posts')
		));
	}

	wp_enqueue_script('script-popper', get_stylesheet_directory_uri() . '/js/required/popper.min.js', array('jquery'));
	wp_enqueue_script('script-bootstrap', get_stylesheet_directory_uri() . '/js/required/bootstrap.min.js', array('jquery'));
	// wp_enqueue_script('script-scroll', get_stylesheet_directory_uri() . '/js/scrolltofixed.min.js', array('jquery'));
	// wp_enqueue_script('script-rellax', get_stylesheet_directory_uri() . '/js/rellax.min.js', array('jquery'));
	wp_enqueue_script('script-app', get_stylesheet_directory_uri() . '/js/app.js', array_merge(array('jquery'), $dependants), filemtime(get_template_directory() . '/js/app.js'));

	wp_localize_script('script-app', 'Main', array(
		'ajax_url' => admin_url('admin-ajax.php'),
		'load_site_posts_nonce' => wp_create_nonce('load-site-posts')
	));
}

function tif_styles() {
	global $global_site;

	$dependants = array();

	wp_register_style('style-slick-slider', get_stylesheet_directory_uri() . '/css/slick.css', array(), '1.8.0');
	wp_enqueue_style('style-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array());
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array());

	/*
	wp_register_style('style-result', get_stylesheet_directory_uri() . '/css/result.min.css', array(), filemtime($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/tif-theme/css/result.min.css'));
	*/

	// Load up the correct stylesheet for the individual site set in the Customize Options area...
	if (empty($global_site)) {
		$global_site = get_theme_mod('tif_global_site');
		$global_site = !empty($global_site) ? $global_site : 'trazeetravel';
	}

	if (!empty($global_site) && $global_site == 'globalusa' && is_front_page())
		$dependants[] = 'style-slick-slider';


	wp_enqueue_style('global-site-style', get_stylesheet_directory_uri() . '/css/' . $global_site . '.min.css', $dependants, filemtime(get_template_directory() . '/css/' . $global_site . '.min.css'));
}
add_action('wp_enqueue_scripts', 'tif_scripts');
add_action('wp_enqueue_scripts', 'tif_styles');


//------------------------------------------------//
//------------- MENUS / POST TYPES ---------------//
//------------------------------------------------//

function tif_register_setup()
{
	global $global_site;

	if (empty($global_site))
		$global_site = apply_filters('get_global_site', 'trazeetravel');

	register_nav_menus(
		array(
			'main_navigation' => __('Main Navigation', 'tif_global'),
			'sub_navigation' => __('Secondary Navigation', 'tif_global'),
			'footer_menu' => __('Footer Navigation', 'tif_global')
		)
	);

	if ($global_site == 'globalusa') {

		register_taxonomy(
			'excursions_category_type',
			'excursions',
			array(
				'hierarchical' => true,
				'label' => 'Categories',
				'query_var' => true,
				'rewrite' => true,
				'show_in_nav_menus' => false
			)
		);
		
		register_taxonomy(
			'excursions_tag_type',
			'excursions',
			array(
				'hierarchical' => false,
				'label' => 'Tags',
				'query_var' => true,
				'rewrite' => true,
				'show_in_nav_menus' => false
			)
		);

		//Set UI labels for Custom Post Type
		$labels = array(
			'name'					=> _x('Excursions', 'Post Type General Name'),
			'singular_name'			=> _x('Excursion', 'Post Type Singular Name'),
			'menu_name'				=> __('Excursions'),
			'parent_item_colon' 	=> __('Parent Excursion'),
			'all_items'				=> __('All Excursions'),
			'view_item'				=> __('View Excursion'),
			'add_new_item'			=> __('Add New Excursion'),
			'add_new'				=> __('Add New'),
			'edit_item'				=> __('Edit Excursion'),
			'update_item'			=> __('Update Excursion'),
			'search_items'			=> __('Search Excursions'),
			'not_found'				=> __('Not Found'),
			'not_found_in_trash'	=> __('Not Found in Trash')
		);
		
		//Set other options for Custom Post Type
		$args = array(
			'label'					=> __('excursions'),
			'description'			=> __('Excursions'),
			'labels'				=> $labels,
			//Features this CPT supports in Post Editor
			'supports'				=> array('title', 'editor', 'thumbnail', 'excerpt'),
			//You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'			=> array(),
			/* A hierarchical CPT is like Pages and can have
			 * Parent and child items. A non-hierarchical CPT
			 * is like Posts.
			*/
			'hierarchical'			=> true,
			'public'				=> true,
			'publicly_queriable'	=> true,
			'show_ui'				=> true,
			'show_in_menu'			=> true,
			'show_in_nav_menus'		=> false,
			'show_in_admin_bar'		=> true,
			'menu_position'			=> 6,
			'menu_icon'				=> 'dashicons-admin-post',
			'can_export'			=> true,
			'has_archive'			=> false,
			'exclude_from_search'	=> false,
			'publicly_queryable'	=> true,
			'capability_type'		=> 'page',
			'rewrite'				=> array('slug' => 'excursions')
		);
		
		register_post_type('excursions', $args);
	}

}
add_action('init', 'tif_register_setup');

//------------------------------------------------//
//------------------- WIDGETS --------------------//
//------------------------------------------------//

function theme_widgets_init() {
	register_sidebar( array (
		'name' => 'Primary Widget Area',
		'id' => 'primary_widget_area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar( array (
		'name' => 'Secondary Widget Area',
		'id' => 'secondary_widget_area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action( 'init', 'theme_widgets_init' );


add_action('after_setup_theme', 'tif_global_theme_setup');

function tif_global_theme_setup()
{
	global $global_site;

	$global_site = get_theme_mod('tif_global_site');
	$global_site = !empty($global_site) ? $global_site : 'trazeetravel';
}

//------------------------------------------------//
//-------------------- ADDONS --------------------//
//------------------------------------------------//

add_filter('show_admin_bar', '__return_false');
add_theme_support('post-thumbnails');

// Allows us to remove field labels from gravity forms
add_filter('gform_enable_field_label_visibility_settings', '__return_true');
require_once('wp_bootstrap_navwalker.php');

//------------------------------------------------//
//------------------ FUNCTIONS -------------------//
//------------------------------------------------//

// Adds ACF Options Page to the backend
if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}

// Changes ACF Options page title on backend menu
if (function_exists('acf_set_options_page_title')) {
	acf_set_options_page_title(__('Theme Options', 'tif_global'));
}

// Changes ACF Options page backend menu order
function custom_menu_order( $menu_ord ) {

	if (!$menu_ord) return true;

	$menu = 'acf-options';
	$menu_ord = array_diff($menu_ord, array($menu));
	array_splice($menu_ord, 1, 0, array($menu));

	return $menu_ord;

}
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');

// Easy way to access template files throughout site
function tif_get_template( $template_name, $args = array(), $template_path = '', $default_path = '' ) {
    if ($args && is_array($args)) {
        extract($args);
    }

    $tif_template_path = empty($template_path) ? apply_filters( 'tif_template_path', 'inc/' ) : $template_path;

    $template_names = array();
    if (is_array($template_name))
    {
    	foreach($template_name as $name)
    	{
    		$template_names[] = trailingslashit($tif_template_path) . $name;
    		$template_names[] = $name;
    	}
    }
    else
    {
    	$template_names = array(
    		trailingslashit($tif_template_path) . $template_name,
			$template_name
    	);
    }

    $located = locate_template($template_names);

    // If the file does not exist, do not load anything, get out of here!
    if (!file_exists($located)) {
        return;
    }

    // Allow a hook to overwrite the located file, if need be!
    $located = apply_filters('tif_get_template', $located, $template_name, $args, $tif_template_path, $default_path);

    // Globally add whatever needed before the template, if need be!
    do_action('tif_before_template_part', $template_name, $tif_template_path, $located, $args);

    include($located);

    // Globally add whatever needed after the template, if need be!
    do_action('tif_after_template_part', $template_name, $tif_template_path, $located, $args);
}

add_action('tif_full_footer_menu', 'tif_full_footer_menu', 10, 3);
function tif_full_footer_menu($menu_location, $split_groups = array(), $classes = array())
{
	if (empty($menu_location)) return;

	$locations = get_nav_menu_locations();

	$menu_group_class = !empty($classes['menu_groups']) ? $classes['menu_groups'] : 'menu-group';

	if (!empty($locations[$menu_location]))
	{
		$menu = wp_get_nav_menu_object($locations[$menu_location]);
		$menu_items = !empty($menu) ? wp_get_nav_menu_items($menu) : array();

		if (!empty($menu_items))
		{
			if (!empty($classes['wrapper']))
			echo '
				<div class="', $classes['wrapper'], '">';

			if (!empty($classes['bootstrap']))
			echo '
				<div class="row">';

			$menu_groups = array();
			$total_sections = 0;

			foreach($menu_items as $item)
			{
				if (empty($item->menu_item_parent))
				{
					$item_slug = sanitize_title_with_dashes($item->title);

					$menu_groups[$item->object_id] = array(
						'title' => $item->title,
						'url' => $item->url,
						'slug' => $item_slug,
						'groups' => array()
					);

					if (!empty($split_groups[$item_slug]))
						$total_sections = $total_sections + $split_groups[$item_slug];
					else
						$total_sections++;

					continue;
				}
				else if (isset($menu_groups[$item->menu_item_parent]))
				{
					$menu_groups[$item->menu_item_parent]['groups'][] = array(
						'menu_id' => $item->object_id,
						'title' => $item->title,
						'url' => $item->url
					);
				}
			}

			if (!empty($menu_groups))
			{
				$bs_col = '';
				if (!empty($classes['bootstrap']))
				{
					if ((24 % $total_sections) == 0)
						$col_class = 'col-xs-12 col-sm-' . (24 / $total_sections);
					else if ($total_sections == 5)
						$col_class = 'col-xs-12 col-sm-' . $total_sections . 'ths';
				}

				foreach($menu_groups as $group_id => $group)
				{
					if (!empty($split_groups[$group['slug']]) && $split_groups[$group['slug']] > 1)
					{
						$split_count = $split_groups[$group['slug']];
						$splitted_groups = array_chunk($group['groups'], (int) ceil(count($group['groups']) / (int) $split_groups[$group['slug']]));

						foreach($splitted_groups as $gKey => $split)
						{
							echo '
								<div class="', $menu_group_class, (!empty($col_class) ? ' ' . $col_class : ''), '">';

								if (empty($gKey))
									echo '
									<h4>', (!empty($group['url']) && $group['url'] !== '#' ? '<a href="' . esc_url($group['url']) . '">' : ''), $group['title'], (!empty($group['url']) && $group['url'] !== '#' ? '</a>' : ''), '</h4>';

								echo '
									<ul class="menu-', $group['slug'], ' grouped">';

								foreach($split as $menu_group)
									echo '
									<li id="menu-item-', $menu_group['menu_id'], '" class="menu-item"><a href="', esc_url($menu_group['url']), '">', esc_html($menu_group['title']), '</a></li>';

								echo '
									</ul>
								</div>';
						}
					}
					else
					{
						echo '
							<div class="', $menu_group_class, (!empty($col_class) ? ' ' . $col_class : ''), '">
								<h4>', (!empty($group['url']) && $group['url'] !== '#' ? '<a href="' . esc_url($group['url']) . '">' : ''), $group['title'], (!empty($group['url']) && $group['url'] !== '#' ? '</a>' : ''), '</h4>';

							echo '
								<ul class="menu-', $group['slug'], '">';

						foreach($group['groups'] as $menu_group)
							echo '
									<li id="menu-item-', $menu_group['menu_id'], '" class="menu-item"><a href="', esc_url($menu_group['url']), '">', esc_html($menu_group['title']), '</a></li>';

							echo '
								</ul>
							</div>';
					}
				}
			}

			if (!empty($classes['bootstrap']))
			echo '
				</div>';

			if (!empty($classes['wrapper']))
			echo '
				</div>';
		}
	}
}

// Puts the Yoast menu under all fields on the page
function yoasttobottom() {
	return 'low';
}
add_filter('wpseo_metabox_prio', 'yoasttobottom');

/**********************************
	PAGINATION FUNCTIONS/FILTERS
***********************************/

add_filter('navigation_markup_template', 'pagination_template', 10, 2);

function pagination_template($template, $class)
{
	$new_template = '
		<div class="%1$s">%3$s</div>';

	return $new_template;
}

function the_tif_posts_pagination($args = array())
{
	echo get_tif_posts_pagination($args);
}
function get_tif_posts_pagination($args = array()) {

	global $wp_query;

    $navigation = '';

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages > 1 ) {

		$current = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
		$total   = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;

		$args = wp_parse_args( $args, array(
			'prev_text'          => _x( 'Prev', 'previous set of posts' ),
			'next_text'          => _x( 'Next', 'next set of posts' ),
			'type'				 => 'array',
			'mid_size'			 => 2,
			'end_size'			 => 3
			// 'show_all'			 => true
		) );

		// Set up paginated links.
		$links = paginate_links($args);

		array_walk($links, function(&$a) {
			$a = str_replace('page-numbers', 'pagenav', $a);
			return $a;
		});

		$pagenum_link = html_entity_decode( get_pagenum_link() );
		$url_parts    = explode( '?', $pagenum_link );
		$pagenum_link = trailingslashit( $url_parts[0] );

		if ($current > 1)
			$links = array_merge(array('<a class="pagenav" href="' . $pagenum_link . '">Start</a>'), $links);
		
		if ($current < $total)
			$links[] = '<a class="pagenav" href="' . $pagenum_link . 'page/' . $total . '/">End</a>';

		$out = '';
		$out .= "<ul class='page-numbers'>\n\t<li>";
		$out .= join("</li>\n\t<li>", $links);
		$out .= "</li>\n</ul>\n";

		if ($out) {
			$navigation = _navigation_markup($out, 'pagination', '');
		}
	}

	return $navigation;
}

/******************************************
	END of PAGINATION FUNCTIONS/FILTERS
******************************************/

function search_content_highlight($content = '') {
	if (empty($content))
    	$content = get_the_content();
    $keys = implode('|', explode(' ', get_search_query()));
    $content = preg_replace('/(' . preg_quote($keys, '/') .')/iu', '<strong class="search-highlight">\0</strong>', $content);

    echo '<p>' . $content . '</p>';
}

function search_excerpt_highlight() {
    $excerpt = get_the_excerpt();
    $keys = implode('|', explode(' ', get_search_query()));
    $excerpt = preg_replace('/(' . preg_quote($keys, '/') .')/iu', '<strong class="search-highlight">\0</strong>', $excerpt);

    echo '<p>' . $excerpt . '</p>';
}

function search_title_highlight() {
    $title = get_the_title();
    $keys = implode('|', explode(' ', get_search_query()));
    $title = preg_replace('/(' . preg_quote($keys, '/') .')/iu', '<strong class="search-highlight">\0</strong>', $title);

    echo $title;
}

add_filter('get_the_primary_category_id', 'get_primary_category_id', 10, 3);

function get_primary_category_id($category_id = 0, $post_id = 0, $category_slug = 'category')
{
	if (empty($post_id)) return 0;

	$primary_category = array();
	$category_slug = !empty($category_slug) ? $category_slug : 'category';

	if ($category_slug == 'category')
		$category = get_the_category();
	else
		$category = get_the_terms($post_id, $category_slug);

	if (!empty($category))
	{
		if (class_exists('WPSEO_Primary_Term'))
		{
			// Show the post's 'Primary' category, if this Yoast feature is available, & one is set
			$wpseo_primary_term = new WPSEO_Primary_Term($category_slug, $post_id);
			$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
			$term = get_term($wpseo_primary_term);

			if (is_wp_error($term))
				$category_id = $category[0]->term_id;
			else
				$category_id = $term->term_id;
		} 
		else
			$category_id = $category[0]->term_id;
	}

	return $category_id;

}

add_filter('get_the_primary_category', 'get_primary_category', 10, 3);

function get_primary_category($primary_category, $post_id, $category_slug)
{
	if (empty($post_id))
	{
		global $post;

		// get the current post id if not defined!
		$post_id = $post->ID;
	}

	$primary_category = array();
	$category_slug = !empty($category_slug) ? $category_slug : 'category';

	if ($category_slug == 'category')
		$category = get_the_category($post_id);
	else
		$category = get_the_terms($post_id, $category_slug);

	// If post has a category assigned.
	if (!empty($category))
	{
		if (class_exists('WPSEO_Primary_Term'))
		{
			// Show the post's 'Primary' category, if this Yoast feature is available, & one is set
			$wpseo_primary_term = new WPSEO_Primary_Term($category_slug, $post_id);
			$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
			$term = get_term($wpseo_primary_term);
			if (is_wp_error($term)) { 
				// Default to first category (not Yoast) if an error is returned
				$primary_category['id'] = $category[0]->term_id;
				$primary_category['title'] = $category[0]->name;
				$primary_category['link'] = $category_slug == 'category' ? get_category_link($category[0]->term_id) : get_term_link($category[0]->term_id);

			} else { 
				$primary_category['id'] = $term->term_id;
				$primary_category['title'] = $term->name;
				$primary_category['link'] = $category_slug == 'category' ? get_category_link($term->term_id) : get_term_link($term->term_id);
			}
		} 
		else {
			// Default, display the first category in WP's list of assigned categories
			$primary_category['id'] = $category[0]->term_id;
			$primary_category['title'] = $category[0]->name;
			$primary_category['link'] = $category_slug == 'category' ? get_category_link($category[0]->term_id) : get_term_link($category[0]->term_id);
		}
	}

	return $primary_category;
}

add_filter('get_the_primary_category_with_child', 'get_primary_category_with_child', 10, 3);

function get_primary_category_with_child($categories, $post_id, $category_slug = '')
{
	if (empty($post_id))
	{
		global $post;

		$post_id = $post->ID;
	}

	$categories = array(
		'primary' => apply_filters('get_the_primary_category', array(), $post_id, $category_slug),
		'child' => array()
	);

	if (!empty($categories['primary']))
	{
		$all_categories = get_the_category($post_id);

		foreach($all_categories as $category)
		{
			if (!empty($category->category_parent) && $category->category_parent == $categories['primary']['id'])
			{
				$categories['child'] = array(
					'id' => $category->term_id,
					'title' => $category->name,
					'link' => get_category_link($category->term_id) 
				);

				break;
			}
		}
	}

	return $categories;
}

add_action('wp_ajax_tif_posts_scroll', 'tif_posts_scroll');
add_action('wp_ajax_nopriv_tif_posts_scroll', 'tif_posts_scroll');

add_action('wp_ajax_load_site_posts', 'load_site_posts');
add_action('wp_ajax_nopriv_load_site_posts', 'load_site_posts');

function load_site_posts()
{
	global $all_sites;

	$return = array(
		'error' => true,
		'data' => ''
	);

	check_ajax_referer('load-site-posts', 'security');

	$site = !empty($_POST['site']) ? $_POST['site'] : '';

	if (!empty($site) && isset($all_sites[$site])) {

		$site_posts = apply_filters('tif_global_api_get_posts', array(), $site);

		if (!empty($site_posts)) {
			ob_start();
			tif_get_template('inc/api_posts.php', array('site' => $site, 'site_posts' => $site_posts));
			$return['data'] = ob_get_contents();
			ob_end_clean();
		}

	}

	wp_send_json($return);
}


add_filter('get_sponsored_posts', 'get_sponsored_posts', 10, 2);

function get_sponsored_posts($return = array(), $excluded_ids = array())
{
	global $wpdb;

	$return = array();

	$sql = $wpdb->prepare("SELECT p.ID
		FROM {$wpdb->prefix}posts p
		INNER JOIN {$wpdb->prefix}postmeta pm ON pm.post_id = p.ID AND pm.meta_key = %s AND pm.meta_value = %s
		WHERE (p.post_status = 'publish' AND p.post_type = 'post')
		ORDER BY NULL", 'is_sponsored', '1');

	$ids = $wpdb->get_col($sql);

	if (!empty($ids) && is_array($ids))
    	$return = array_map('get_post', $ids);

    return $return;
}

/*
add_filter('get_unsponsored_posts', 'get_unsponsored_posts', 10, 4);

function get_unsponsored_posts($return = array(), $args = array(), $start = 0, $limit = 11)
{
	global $wpdb;

	$return = array();

	$sql = $wpdb->prepare("SELECT pm.post_id
		FROM {$wpdb->postsmeta} pm
		INNER JOIN {$wpdb->posts} p ON p.ID = pm.post_id AND p.post_status = 'publish' AND p.post_type = 'post'
		WHERE ((pm.meta_key = %s AND pm.meta_value = %s) OR (pm.meta_key")
}
*/

function tif_posts_scroll()
{
	check_ajax_referer('scroll-posts', 'security');

	$result = array(
		'error' => __('Sorry, An Error Occurred. Please try again later.', 'tif_global'),
		'has_more' => false
	);

	$start = !empty($_POST['start']) ? (int) $_POST['start'] : 0;
	$all_sponsors = !empty($_POST['all_sponsors']) ? json_decode(stripslashes_deep($_POST['all_sponsors']), true) : array();
	$random_sponsors = !empty($_POST['rand_sponsors']) ? json_decode(stripslashes_deep($_POST['rand_sponsors']), true) : array();
	$added_args = !empty($_POST['args']) ? json_decode(stripslashes_deep($_POST['args']), true) : array();
	$the_adgroup_id = !empty($_POST['adgroupid']) ? (int) $_POST['adgroupid'] : 0;
	$pattern = !empty($_POST['pattern']) ? $_POST['pattern'] : '';
	$posts_per_page = 12; // !empty($_POST['posts_per_page']) ? (int) $_POST['posts_per_page'] : 12;
	$ordered_array = $sponsors = array();
	$total_sponsors = 0;

	if (!empty($the_adgroup_id) && function_exists('get_ad_group') && group_has_ads($the_adgroup_id))
	{
		$the_ad = get_ad_group($the_adgroup_id);
		$posts_per_page--;
	}

	if (!empty($random_sponsors))
	{
		$sponsors = array_map('get_post', $random_sponsors);
		$total_sponsors = count($sponsors);
	}

	$args = array(
		'post_type' => 'post',
		'orderby' => 'date',
		'post_status' => 'publish',
		'posts_per_page' => ($posts_per_page - $total_sponsors)
	);

	if (!empty($added_args))
		$args = array_merge($args, $added_args);

	if (!empty($all_sponsors))
		$args['post__not_in'] = $all_sponsors;

	if (!empty($start))
		$args['offset'] = $start;

	$the_query = new WP_Query($args);

	if (!empty($the_query->posts))
	{

		$total_posts = count($the_query->posts);

		if ($total_posts > (($posts_per_page - $total_sponsors) - 1))
		{
			array_pop($the_query->posts);
			$result['has_more'] = true;
		}

		foreach($pattern as $key => $value)
		{
			if (!empty($the_query->posts))
			{
				$limit = $value == 3 && !empty($sponsors) ? 2 : $value;
				$ordered_array[$key] = array_splice($the_query->posts, 0, $limit);

				if ($value > 4 && !empty($the_ad))
				{
					$ordered_array[$key][] = (object) [
						'ad_type' => 'basic',
						'output' => array($the_ad)
					];
				}
				if ($value == 3 && !empty($sponsors))
					$ordered_array[$key] = array_merge(array_slice($ordered_array[$key], 0, 1), array_splice($sponsors, 0, 1), array_slice($ordered_array[$key], 1));
			}
		}

		if (!empty($ordered_array))
		{
			ob_start();

			foreach($pattern as $key => $value)
			{
				// Make sure to get the 6posts-template here.
				if (!empty($ordered_array[$key]))
					tif_get_template('inc/' . ($value == 5 ? '6' : $value) . 'posts-template.php', array('post_data' => $ordered_array[$key]));
			}

			$result['posts'] = ob_get_contents();
			ob_end_clean();

			unset($result['error']);
		}		
	}

	wp_send_json($result);
}

add_filter('tif_social_share', 'social_share', 10, 5);

function social_share($return = '', $post_id = 0, $classes = array(), $attributes = array(), $echo = true)
{
    global $post;

    $post_id = !empty($post_id) ? (int) $post_id : $post->ID;

    if (has_filter('filter_classes'))
        $classes = apply_filters('filter_classes', $classes);

    $copy = '
        <div id="social-share" class="social-share' . (!empty($classes) ? ' ' . $classes : '') . '"' . (!empty($attributes) ? implode(' ', array_map(function ($k, $v) { return $k .'="'. htmlspecialchars($v) .'"'; }, array_keys($attributes), $attributes)) : '') . '>
            <div class="row">
                <div class="col-24">
                    <p class="social-title">Share<span>This</span></p>
                </div>
            </div>
            <ul class="row list-unstyled">
                <li class="col col-sm-24"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                <li class="col col-sm-24"><a target="_blank" href="http://twitter.com/share?url='. get_the_permalink($post_id) .'"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="col col-sm-24"><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='. get_the_permalink($post_id) .'&title=Share%20from%20' . urldecode(get_bloginfo('name')) . '&summary='. get_the_permalink($post_id) .'&source="><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li class="col col-sm-24"><a href="mailto:?subject=Shared post from ' . get_bloginfo('name') . '&body=Shared Link: '. get_the_permalink($post_id) .'"><i class="fa fa-share" aria-hidden="true"></i></a></li>
            </ul>
        </div>';

    if (!empty($echo))
        echo $copy;
    else
        return $copy;
}

/* Provides a Filter By Author in the wp-admin posts dashboard... */
function tif_restrict_manage_posts($post_type, $which) {

	if ($post_type == 'post')
	{
		$params = array(
			'name' => 'author',
			'show_option_all' => 'All Authors'
		);
	 
		if (isset($_GET['user']))
			$params['selected'] = $_GET['user'];
	 
		wp_dropdown_users($params);
	}
	else if ($post_type == 'member')
	{
		$info_taxonomy = get_taxonomy('service');
		wp_dropdown_categories(array(
			'show_option_all' => __("Show All {$info_taxonomy->label}"),
			'taxonomy'        => 'service',
			'name'            => 'service',
			'orderby'         => 'name',
			'selected'        => isset($_GET['service']) ? $_GET['service'] : '',
			'show_count'      => true
		));
	}
}
 
add_action('restrict_manage_posts', 'tif_restrict_manage_posts', 10, 2);



add_action('wp_head', 'trazee_head');

function trazee_head()
{
	global $global_site;

	$typekit = array(
		'trazeetravel' => 'vot5tfa',
		'whereverfamily' => 'vhn5psy',
		'globalusa' => 'onr7ydr'
	);

	echo '
		<script>
		  (function(d) {
		    var config = {
		      kitId: \'' . $typekit[$global_site] . '\',
		      scriptTimeout: 3000,
		      async: true
		    },
		    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src=\'https://use.typekit.net/\'+config.kitId+\'.js\';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		  })(document);
		</script>' . PHP_EOL;

	// Google Analytics...
	/*
	echo "
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-54228729-1', 'auto');
	  ga('send', 'pageview');
	</script>" . PHP_EOL;
	*/
}

add_action('header1_before_after_menu', 'trazee_before_after_menu', 10, 3);

function trazee_before_after_menu($menu, $location = '', $class = '')
{
	global $wpdb, $hero_type, $all_sites, $global_site, $wp;

	if ($location == 'before' && $class == "menu-before")
	{
		echo '
			<div class="justify-content-start container-fluid pt-2 pb-3">';
	}

	if ($class == 'topline-after') {

		if (empty($global_site)) {
			$global_site = get_theme_mod('tif_global_site');
			$global_site = !empty($global_site) ? $global_site : 'trazeetravel';
		}
		$temp = $all_sites;

		if (isset($temp[$global_site]))
			unset($temp[$global_site]);

		if (!empty($temp)) {
			foreach($temp as $site_key => $site) {
				echo '
				<div class="site-section py-3 py-sm-5 fade" id="section-' . $site_key . '"></div>';
			}
		}
	}


	if ($location == 'after')
	{
		if ($class == 'menu-after')
		{
			echo '
				<div class="social order-last ml-auto mt-3">';

			$socials = apply_filters('trazee_get_socials', array());

			echo '
				<ul class="list-inline">';

			if (!empty($socials))
			{
				foreach($socials as $seo_key => $social)
				{
					echo '
						<li class="list-inline-item d-none d-sm-inline-block social-media px-2"><a href="', ($seo_key == 'twitter_site' ? 'https://twitter.com/@' . $social['value'] : $social['value']), '" target="_blank" class="social-link d-inline-block"><i class="fa ', $social['fa_class'], '"></i></a></li>';
				}
			}

			echo '
				<li class="list-inline-item pl-3 pr-2 search-wrapper"><a href="#" class="search-link" data-toggle="modal" data-target="#tif-search-modal"><i class="fa fa-search"></i></a></li>
				</ul>';

			echo '
				</div>
				<div id="overlay"' . (!empty($class) ? ' class="' . $class . '"' : '') . '></div>
			</div>';

			if ($global_site == 'globalusa') {
				
				$theme_locations = get_nav_menu_locations();
				$submenu_html = '';

				if (!empty($theme_locations) && !empty($theme_locations['sub_navigation']))
				{
					$submenu = get_term($theme_locations['sub_navigation'], 'nav_menu');

					if (!empty($submenu)) {
						$submenu_items = wp_get_nav_menu_items($submenu, array('nopaging' => true));

						if (!empty($submenu_items)) {
							echo '
								<div id="subnav" class="d-flex justify-content-center align-items-center pt-3 pb-2 w-100">
									<ul class="list-inline my-auto">';

							foreach($submenu_items as $submenu_item) {
								$is_active = untrailingslashit(home_url(add_query_arg(array(), $wp->request))) == untrailingslashit($submenu_item->url);
								echo '
										<li class="list-inline-item', (!empty($is_active) ? ' active' : ''), ' mx-3 px-md-2 subnav-li">
											<a href="' . $submenu_item->url . '" class="subnav-link">' . $submenu_item->title . '</a>
										</li>';
							}
							echo '
									</ul>
								</div>';
						}
					}
				}
			}
		}
		else if ($class == 'topline-after' && (empty($hero_type) || $hero_type != 'hometakeover'))
		{
			if(function_exists('the_ad_placement') && placement_has_ads('homepage-leaderboard'))
			{
			echo '
				<div class="container header-ad px-4 mt-2">
					<div class="row">
						<div class="d-flex mx-auto">';
							the_ad_placement('homepage-leaderboard');
			echo '
						</div>
					</div>
				</div>';
			}
		}
	}
}

add_filter('trazee_get_socials', 'trazee_get_seo_socials', 10, 1);

function trazee_get_seo_socials($return)
{
	$return = array();
	$socials = array();
	$social_media = get_option('wpseo_social', false);

	if (!empty($social_media))
	{
		$social_media = array_filter($social_media);
		
		$social_keys = array('instagram_url' => 'fa-instagram', 'facebook_site' => 'fa-facebook-f', 'twitter_site' => 'fa-twitter', 'linkedin_url' => 'fa-linkedin', 'pinterest_url' => 'fa-pinterest-p', 'youtube_url' => 'fa-youtube-play');

		if (!empty($social_media))
			$socials = array_intersect_key($social_keys, $social_media);

		if (!empty($socials))
		{
			foreach($socials as $seo_key => $fa_class)
				$return[$seo_key] = array(
					'fa_class' => $fa_class,
					'value' => !empty($social_media[$seo_key]) ? $social_media[$seo_key] : ''
				);
		}
	}

	return $return;
}

add_filter('tif_search_placeholder', 'global_site_search_placeholder', 10, 1);

function global_site_search_placeholder($placeholder)
{
	global $all_sites, $global_site;

	$global_site = !empty($global_site) ? $global_site : apply_filters('get_global_site', '');

	if (!empty($global_site) && isset($all_sites[$global_site]['search_placeholder'])) {
		return sprintf('Search %s', $all_sites[$global_site]['search_placeholder']);
	}

	return 'Search';
}

add_filter('tif_search_submit_button', 'tif_global_search_submit_button', 10, 1);

function tif_global_search_submit_button($button)
{
	global $global_site;

	return '<div class="button-wrapper"><button type="submit" class="submit' . apply_filters('tif_search_button_classes', '') . '" id="searchsubmit">' . ($global_site != 'globalusa' ? apply_filters('tif_search_submit', __('Go', 'tif_global')) : '') . '</button></div>';
}

add_filter('get_global_site', 'tif_global_get_site', 10, 1);

function tif_global_get_site($site) {

	global $global_site;

	if (empty($global_site)) {
		$global_site = get_theme_mod('tif_global_site');
		$global_site = !empty($global_site) ? $global_site : 'trazeetravel';
	}

	return !empty($global_site) ? $global_site : $site;
}

add_filter('wp_nav_menu_items', 'trazee_wp_nav_menu_items', 10, 2);

function trazee_wp_nav_menu_items($items, $args) {

	global $global_site;

    if($args->theme_location == 'main_navigation')
    {
    	$global_site = apply_filters('get_global_site', 'trazeetravel');
    	$socials = apply_filters('trazee_get_socials', array());

    	if ($global_site == 'globalusa') {
    		ob_start();
    		do_action('globalusa_menu_app');
    		$items .= ob_get_clean();
    	}

    	if (!empty($socials))
    	{
    		$items .= '<li class="social-buttons"><ul class="list-inline">';

    		foreach($socials as $seo_key => $social)
				$items .= '<li class="list-inline-item social-media px-2"><a href="' . ($seo_key == 'twitter_site' ? 'https://twitter.com/@' . $social['value'] : $social['value']) . '" target="_blank" class="social-link d-inline-block"><i class="fa ' . $social['fa_class'] . '"></i></a></li>';

			$items .= '</ul></li>';
    	}

    	$items .= '<li class="copyright">&copy; ' . date('Y') . ' FXExpress Publications, Inc.<p><a href="/privacy-policy-disclaimer/" class="privacy-policy"><span>Privacy Policy</span></a></p></li>';
    }

    return $items;
}

add_filter('get_global_site_directory_path_uri', 'tif_global_get_path_url_for_site', 10, 3);

function tif_global_get_path_url_for_site($url, $path_type, $filename)
{
	global $global_site;

	// path type is required!
	if (!empty($path_type)) {

		if (empty($global_site)) {
			$global_site = get_theme_mod('tif_global_site');
			$global_site = !empty($global_site) ? $global_site : 'trazeetravel';
		}

		$url = get_template_directory_uri() . '/' . $path_type . '/' . $global_site;

		if (!empty($filename))
			$url .= '/' . $filename;
	}

	return $url;
}

add_action('globalusa_menu_app', 'tif_global_globalusa_menu_app');

function tif_global_globalusa_menu_app()
{
	$app_store_image = apply_filters('get_global_site_directory_path_uri', '', 'images', 'app-store.png');

	echo '
	<li class="get-the-app text-center pt-4">
		<h3 class="blue">', __('Get the GT App', 'vetgirl'), '</h3>';

	if (!empty($app_store_image))
		echo '
		<a href="https://itunes.apple.com/us/app/global-traveler-magazine/id585809370?mt=8" target="_blank" class="app-store-img py-2">
			<img src="' . $app_store_image . '" alt="" class="img-fluid" />
		</a>';

	echo '
	</li>';
}

add_filter('get_post_first_paragraph', 'get_post_first_paragraph', 10, 2);

function get_post_first_paragraph($return, $post_id)
{
	if (empty($post_id))
	{
		global $post;

		$post_id = $post->ID;
	}

	$str = get_post_field('post_content', $post_id);
	$str = ltrim($str, '&nbsp;');
	$str = trim($str);
	$str = preg_replace('#\[[^\]]+\]#', '', $str);
	// $str = strip_shortcodes($str);
	$str = wpautop($str);
	$str = substr($str, 0, strpos($str, '</p>') + 4);
	$str = strip_tags($str, '<a><strong><em><script><style>');
	return '<p class="d-none d-sm-block content block-with-text">' . $str . '</p>';
}


add_action('pre_get_posts', 'trazee_pre_get_posts', 10, 1);

function trazee_pre_get_posts($query)
{
	if (is_admin())
		return $query;

	if ($query->is_search() && $query->is_main_query())
	{
		$query->set('posts_per_page', 11);
		$query->set('orderby', 'date');
		$query->set('post_status', 'publish');
	}

	return $query;
}

// Only load 10 posts per page by default for the Relationship field, helps speed edit/new post load up a bit!
function related_posts_relationship_query($args, $field, $post_id)
{
    $args['posts_per_page'] = 10;
    return $args;    
}

add_filter('acf/fields/relationship/query', 'related_posts_relationship_query', 10, 3);

add_filter('get_instagram_feed', 'get_instagram_feed', 10, 3);

function get_instagram_feed($return = array(), $total_posts = 5, $instagram_account)
{
	global $instagram_access_token;

	$instagram_feed = get_transient('instagram_' . $instagram_account . '_feed');

	if (empty($instagram_feed))
	{
		$instagram_feed = array();
		$access_token_parts = explode('.', $instagram_access_token[$instagram_account]);

		// When we need to generate a new access token to be authorized...
		// https://www.instagram.com/oauth/authorize/?client_id=c13f70a6184e4879b92a97fc5ea99b51&redirect_uri=https://www.trazeetravel.com&response_type=token&scope=public_content
		$url = 'https://api.instagram.com/v1/users/' . $access_token_parts[0] . '/media/recent/?access_token=' . $instagram_access_token[$instagram_account] . '&count=' . $total_posts;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$data = curl_exec($ch);
		curl_close($ch);

		if (!empty($data))
			$instagram_feed = json_decode($data, true);

		set_transient('instagram_' . $instagram_account . '_feed', $instagram_feed, (HOUR_IN_SECONDS * 3));
	}

	return !empty($instagram_feed) ? $instagram_feed : $return;
}

remove_action('wp_head', 'rel_canonical');

/*

// If we want to show unique ads, we can get a different ad from the $ad_group and set it as the $output...
// But for now we are just going to let the plugin handle this!
add_filter('advanced-ads-group-output-array', 'trazee_ads_group_output_array', 10, 2);

function trazee_ads_group_output_array($output, $ad_group)
{
	file_put_contents(dirname(__FILE__) . '/output.log', var_export($output, true) . str_repeat(PHP_EOL, 20) . var_export($ad_group, true) . str_repeat(PHP_EOL, 10), FILE_APPEND | LOCK_EX);

	return $output;
}
*/

add_action('tif_global_favicon_globalusa', 'tif_global_favicon_globalusa');
add_action('tif_global_favicon_trazeetravel', 'tif_global_favicon_trazeetravel');
add_action('tif_global_favicon_whereverfamily', 'tif_global_favicon_whereverfamily');

function tif_global_favicon_whereverfamily()
{
	$icon_path = get_stylesheet_directory_uri() . '/images/whereverfamily/favicons/';
	echo '
		<link rel="apple-touch-icon" sizes="57x57" href="', $icon_path, 'apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="', $icon_path, 'apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="', $icon_path, 'apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="', $icon_path, 'apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="', $icon_path, 'apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="', $icon_path, 'apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="', $icon_path, 'apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="', $icon_path, 'apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="', $icon_path, 'apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="', $icon_path, 'android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="', $icon_path, 'favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="', $icon_path, 'favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="', $icon_path, 'favicon-16x16.png">
		<link rel="manifest" href="', $icon_path, 'manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="', $icon_path, 'ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">';
}

function tif_global_favicon_trazeetravel()
{
	$icon_path = get_stylesheet_directory_uri() . '/images/trazeetravel/favicons/';
	echo '
		<link rel="apple-touch-icon" sizes="180x180" href="', $icon_path, 'apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="256x256"  href="', $icon_path, 'android-chrome-256x256.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="', $icon_path, 'android-chrome-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="', $icon_path, 'favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="', $icon_path, 'favicon-16x16.png">
		<link rel="mask-icon" href="', $icon_path, 'safari-pinned-tab.svg" color="#00aba9">
		<link rel="shortcut icon" href="', $icon_path, 'favicon.ico">
		<meta name="msapplication-TileColor" content="#00aba9">
		<meta name="msapplication-TileImage" content="', $icon_path, 'mstile-150x150.png">
		<meta name="msapplication-config" content="', $icon_path, 'browserconfig.xml">
		<meta name="theme-color" content="#ffffff">';
}

function tif_global_favicon_globalusa()
{
	$icon_path = get_stylesheet_directory_uri() . '/images/globalusa/favicons/';
	echo '
		<link rel="shortcut icon" type="image/png" sizes="16x16" href="', $icon_path, 'favicon-16x16.png">';
}

add_filter('tif_global_get_the_excerpt', 'tif_global_get_the_excerpt', 10, 3);

function tif_global_get_the_excerpt($excerpt, $post_id, $charlength = 0)
{
	global $post;
	if (empty($post_id))
		$post_id = $post->ID;

	return !empty($charlength) ? the_excerpt_max_charlength($post_id, $charlength) : $excerpt;
}

function the_excerpt_max_charlength($post_id, $charlength) {
	$return = '';
	$excerpt = get_the_excerpt($post_id);
	$charlength++;

	if (mb_strlen($excerpt) > $charlength) {
		$subex = mb_substr($excerpt, 0, $charlength - 5);
		$exwords = explode(' ', $subex);
		$excut = - (mb_strlen($exwords[ count($exwords) - 1]));
		$return = $excut < 0 ? mb_substr($subex, 0, $excut) . '...' : $subex . '...';
	} else
		$return = $excerpt;

	return $return;
}


?>
