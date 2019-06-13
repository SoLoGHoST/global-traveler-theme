<div class="full-width post-grid-1">
	<div class="container-fluid">
		
		<?php $template_options = $args[0]; ?>
		
		<div class="inner <?php echo $template_options['wrapper_classes']; ?>">
			
			<?php foreach($template_options['order'] as $order) {
				echo post_grid_1_print($order);
			} ?>
			
		</div>
	</div>
</div>
