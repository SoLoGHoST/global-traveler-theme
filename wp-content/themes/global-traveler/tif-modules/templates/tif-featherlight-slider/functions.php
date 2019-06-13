<?php
  // Location: ./tif-featherlight-slider/functions.php


function tif_featherlight_slider_styles()
{
	wp_enqueue_style('tif-featherlight-style', get_tif_template_directory_uri('tif-featherlight-slider') . '/assets/css/featherlight.min.css', array(), '1.7.13');
	wp_enqueue_style('tif-featherlight-gallery-style', get_tif_template_directory_uri('tif-featherlight-slider') . '/assets/css/featherlight.gallery.min.css', array('tif-featherlight-style'), '1.7.13');
}

function tif_featherlight_slider_scripts()
{
	wp_register_script('tif-featherlight-swipe-detect', get_tif_template_directory_uri('tif-featherlight-slider') . '/assets/js/jquery.detect_swipe.js', array('jquery'), '2.1.3');
	wp_register_script('tif-featherlight-script', get_tif_template_directory_uri('tif-featherlight-slider') . '/assets/js/featherlight.min.js', array('jquery'), '1.7.13');
	wp_enqueue_script('tif-featherlight-gallery', get_tif_template_directory_uri('tif-featherlight-slider') . '/assets/js/featherlight.gallery.min.js', array('jquery', 'tif-featherlight-swipe-detect', 'tif-featherlight-script'), '1.7.13');

	wp_enqueue_script('tif-featherlight-slider-app', get_tif_template_directory_uri('tif-featherlight-slider') . '/tif-featherlight-slider.js', array('jquery', 'tif-featherlight-gallery'), '0.0.2');
}
add_action('wp_enqueue_scripts', 'tif_featherlight_slider_styles');
add_action('wp_enqueue_scripts', 'tif_featherlight_slider_scripts');
