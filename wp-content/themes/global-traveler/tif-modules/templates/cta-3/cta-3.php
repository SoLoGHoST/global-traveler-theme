<div class="full-width cta-3">
	<div class="container-fluid">
		
		<?php $template_options = $args[0]; ?>
		
		<div class="inner <?php echo $template_options['wrapper_classes']; ?>">
			
			<?php foreach($template_options['order'] as $order) {
				echo cta_3_print($order);
			} ?>
			
		</div>
	</div>
</div>