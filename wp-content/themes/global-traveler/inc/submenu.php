<?php 

/* Filename:  submenu.php
 * Description:  Displays the Submenu on pages (Services Template, etc. etc.)
**/

if (!defined('ABSPATH')) exit(0);

global $is_mobile, $is_tablet;

if (!empty($menu_id)):

	$args = array(
		'menu' => $menu_id,
		'menu_class' => 'submenu-nav list-inline',
		'container_id' => 'page-submenu'
	);

	if (!empty($is_mobile))
	{
		$args['items_wrap'] = '<div class="dropdown-select"><select class="select-menu-nav" id="drop-nav">%3$s</select></div>';
		$args['walker'] = new Walker_Nav_Dropdown_Menu();
	}

	wp_nav_menu($args);
endif; ?>