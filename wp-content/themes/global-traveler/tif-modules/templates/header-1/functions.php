<?php
  // Location: ./header-1/functions.php


add_action('header1_before_after_menu', 'header1_before_after_menus', 10, 3);

function header1_before_after_menus($menu, $type = 'before', $class = '')
{
	if (empty($menu) || empty($type)) return;

	if (!empty($menu[$type]))
	{
		echo '
		<div class="', $class, (!empty($menu[$type]['class']) ? ' ' . apply_filters('filter_classes', $menu[$type]['class']) : ''), '">';

		if (!empty($menu[$type]['filters']))
		{
			foreach($menu[$type]['filters'] as $filter_name => $default_content)
				echo apply_filters($filter_name, $default_content, $menu);
		}
		else if (!empty($menu[$type]['content']))
			echo apply_filters('the_content', $menu[$type]['content']);

		echo '
		</div>';
	}
}

