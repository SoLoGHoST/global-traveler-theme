<?php

include_once("template-includes.php");

function tif_template_path($template_name) {
  // Shortcut to access TIF Template paths
  return "tif-modules/templates/$template_name/$template_name.php";
}

function get_tif_template_directory_uri($template_name = '') {
	return get_stylesheet_directory_uri() . '/tif-modules/templates' . (!empty($template_name) ? '/' . $template_name : '');
}

// PRIMITIVES

// Normal anchor primitive with href/classes/target
// Added data_toggle/data_target for Bootstrap Modal
function anchor_primitive($href, $classes, $target, $data_toggle, $data_target) {
	$html = "<a href='{$href}' class='{$classes}' target='{$target}' data-toggle='{$data_toggle}' data-target='{$data_target}'></a>";
}


// FILTERS

add_filter('filter_classes', 'tif_filter_classes', 10, 2);

function tif_filter_classes($classes, $flatten = true)
{
	if (!empty($classes))
	{
		if (is_array($classes))
		{
			$the_classes = array_filter($classes);

			if (!empty($the_classes))
			{
				foreach($the_classes as $class_key => $the_class)
					if (!empty($the_class))
						$classes[$class_key] = !empty($flatten) ? (is_array($the_class) ? implode(' ', array_filter(array_map('trim', $the_class))) : trim($the_class)) : apply_filters('filter_classes', $the_class, $flatten);

				if (!empty($classes))
					$classes = !empty($flatten) ? implode(' ', $the_classes) : $the_classes;
			}
		}
		else
			$classes = trim($classes);
	}
	return $classes;
}