<div class="full-width cta-1">
	<div class="container-fluid">
		
		<?php $template_options = $args[0]; ?>
		
		<div class="inner <?php echo $template_options['wrapper_classes']; ?>">
			
			<div class="row">
							
				<?php foreach($template_options['order'] as $order) {
					echo cta_1_print($order);
				} ?>
				
			</div>
			
		</div>
	</div>
</div>
