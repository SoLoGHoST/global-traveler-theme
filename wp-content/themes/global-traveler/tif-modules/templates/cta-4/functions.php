<?php
  // Location: ./inc/templates/cta-4/functions.php

function cta_4_print($order) {
	switch($order['type']) {
		case 'block':
			return cta_4_print_block($order);
		default:
			return '';
	}
}

function cta_4_print_block($order) {
	$html = "<div class='content {$order['classes']}'>
				<div class='row'>";
			
	foreach($order['data'] as $block) {		
	
		$html .= "<div class='half-image {$block['classes']}' style='background-image: url({$block['img_src']});'>
						<div class='copy'>
							<h1>{$block['title']}</h1>
							<p>{$block['copy']}</p>
							<a href='{$block['button_href']}' class='{$block['button_classes']}'>{$block['button_text']}</a>
						</div>
					</div>";
									
	}
	
	$html .= "</div></div>";
	
	return $html;
}