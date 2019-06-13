<?php
  // Location: ./inc/templates/post-grid-2/functions.php

function post_grid_2_print($order) {
	switch($order['type']) {
		case 'title':
			return post_grid_2_print_title($order);
		case 'block':
			return post_grid_2_print_block($order);
		default:
			return '';
	}
}

function post_grid_2_print_title($order) {
	$html = "<div class='content {$order['classes']}'>
				<h1 class='{$order['data']['classes']}'>{$order['data']['text']}</h1>
			</div>";
	
	return $html;
}

function post_grid_2_print_block($order) {
	$html = "<div class='grid {$order['classes']}'>";
			
	foreach($order['data'] as $block) {		
	
		$html .= "<div class='grid-item {$block['classes']}'>
					<div class='row'>
						<div class='title col-24 col-sm-6 col-md-5'>
							<p class='small-title'>{$block['small_title']}</p>
							<h4>{$block['title']}</h4>
						</div>
						<div class='description col-24 col-sm-12 offset-md-1 col-md-12'>
							<p>{$block['copy']}</p>
						</div>
						<div class='click col-24 col-sm-6 offset-md-1 col-md-5'>
							<p><a href='{$block['button_href']}' target='{$block['button_target']}' class='{$block['button_classes']}'>{$block['button_text']}</a></p>
						</div>
					</div>
				</div>";
					
	}
	
	$html .= "</div>";
	
	return $html;
}