<?php
  // Location: ./inc/templates/cta-3/functions.php

function cta_3_print($order) {
	switch($order['type']) {
		case 'title':
			return cta_3_print_title($order);
		case 'block':
			return cta_3_print_block($order);
		default:
			return '';
	}
}

function cta_3_print_title($order) {
	$html = "<div class='content {$order['classes']}'>
				<h1 class='{$order['data']['classes']}'>{$order['data']['text']}</h1>
			</div>";
	
	return $html;
}

function cta_3_print_block($order) {
	$html = "<div class='contact {$order['classes']}'>
				<div class='row'>";
	
	foreach($order['data'] as $buttons) {
		if ($buttons['type'] == "button") {
			
			$html .= "<div class='contact-item {$buttons['classes']}'>
							<a href='{$buttons['href']}'>
								<img src='{$buttons['img_src']}' class='img-fluid {$buttons['img_classes']}' />
								<h3>{$buttons['title']}</h3>
							</a>
						</div>";
						
		}
	}
	
	$html .="</div></div>";
	
	return $html;
}