<?php
  // Location: ./inc/templates/cta-2/functions.php

function cta_2_print($order) {
	switch($order['type']) {
		case 'title':
			return cta_2_print_title($order);
		case 'button':
			return cta_2_print_button($order);
		case 'copy':
			return cta_2_print_copy($order);
		case 'text_link':
			return cta_2_print_text_link($order);
		default:
			return '';
	}
}

function cta_2_print_title($order) {
	$html = "<h1 class='{$order['classes']}'>{$order['data']['text']}</h1>";
	
	return $html;
}

function cta_2_print_button($order) {
	$html = "<a href='{$order['data']['href']}' class='{$order['classes']}'>{$order['data']['text']}</a>";
	
	return $html;
}

function cta_2_print_copy($order) {
	$html = "<p class='{$order['classes']}'>{$order['data']['text']}</p>";
	
	return $html;
}

function cta_2_print_text_link($order) {
	$html = "<a href='{$order['data']['href']}' class='{$order['classes']}'>{$order['data']['text']}</a>";
	
	return $html;
}