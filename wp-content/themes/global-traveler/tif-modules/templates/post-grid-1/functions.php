<?php
  // Location: ./inc/templates/post-grid-1/functions.php

function post_grid_1_print($order) {
	switch($order['type']) {
		case 'title':
			return post_grid_1_print_title($order);
		case 'block':
			return post_grid_1_print_block($order);
		default:
			return '';
	}
}

function post_grid_1_print_title($order) {
	$html = "<div class='content {$order['classes']}'>
				<h1 class='{$order['data']['classes']}'>{$order['data']['text']}</h1>
			</div>";
	
	return $html;
}

function post_grid_1_print_block($order) {
	$html = "<div class='grid {$order['classes']}'>
				<div class='row'>";
			
	foreach($order['data'] as $block) {		
	
		$html .= "<div class='grid-item {$block['classes']}'>
						<a href='{$block['button_href']}' class='image' style='background-image: url({$block['img_src']});'>
							<span class='overlay'></span>
							<span class='copy'>
								<h4>{$block['title']}</h4>
								<p>{$block['copy']}</p>
							</span>
						</a>
					</div>";
					
	}
	
	$html .= "</div></div>";
	
	return $html;
}