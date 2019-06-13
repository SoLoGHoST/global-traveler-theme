<?php
  // Location: ./tif-search-modal/functions.php


add_filter('get_search_form', 'tif_search_modal_get_search_form', 10, 1);

// Going to use our supplied searchform.php file instead of wordpress supplied one!
function tif_search_modal_get_search_form($form)
{
	ob_start();
	tif_get_template('tif-modules/templates/tif-search-modal/searchform.php', array());
	$form = ob_get_clean();

	return $form;
}

add_filter('tif_search_submit_button', 'tif_search_submit_button');

function tif_search_submit_button()
{
    return '<input type="submit" class="submit' . apply_filters('tif_search_button_classes', ' d-none') . '" id="searchsubmit" value="' . apply_filters('tif_search_submit', __('Search', 'tif')) . '" />';
}

function tif_search_modal_scripts()
{
	wp_enqueue_script('tif-search-modal-script', get_stylesheet_directory_uri() . '/tif-modules/templates/tif-search-modal/tif-search-modal.js', array('jquery'), '1.0');
}

add_action('wp_enqueue_scripts', 'tif_search_modal_scripts');

/********************************************
		SEARCH RELATED STUFF
********************************************/
function tif_search_modal_pre_get_posts($query) {

    if ($query->is_search && !is_admin()) {

    	// check if length of query > 3 but < 200
    	$search_query = trim(get_search_query());
    	$search_length = strlen($search_query);

    	if ($search_length < 3 || $search_length > 200)
    	{
    		$query->set('error', 'Search term must be a minimum of 3 characters and a maximum of 200 characters.');
    		return $query;
    	}
    	else
    	{
	        // $query->set('post_type', array('post', 'page'));
	        $query->set('posts_per_page', 20);
	    }
    }

	return $query;
}

add_filter('pre_get_posts','tif_search_modal_pre_get_posts');
