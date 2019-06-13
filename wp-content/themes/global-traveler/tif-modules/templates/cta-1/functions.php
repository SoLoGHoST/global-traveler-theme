<?php
  // Location: ./inc/templates/cta-1/functions.php

function cta_1_print($order) {
	switch($order['type']) {
		case 'block':
			return cta_1_print_block($order);
		case 'buttons':
			return cta_1_print_buttons($order);
		default:
			return '';
	}
}

function cta_1_print_block($order) {
	$html = "<div class='content {$order['classes']}'>
		<div class='copy col-24 col-md-21'>";
	$html .= ($order['data']['title'] != '') ? "<h1>{$order['data']['title']}</h1>" : '';
	$html .= ($order['data']['copy'] != '') ? "<p>{$order['data']['copy']}</p>" : '';
	$html .= "</div></div>";
	
	
	return $html;
}

function cta_1_print_buttons($order) {
	$html = "<div class='contact {$order['classes']}'>";
	foreach($order['data']['buttons'] as $button) {
		$html .= $button;
	}
	$html .= "</div>";
	return $html;
}