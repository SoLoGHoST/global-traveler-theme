<div class="full-width cta-2">
	<div class="container-fluid">
		
		<?php $template_options = $args[0]; ?>
		
		<div class="inner <?php echo $template_options['wrapper_classes']; ?>">
			
			<div class="content col-24 no-pad">
				<?php foreach($template_options['order'] as $order) {
					echo cta_2_print($order);
				} ?>
			</div>
			
		</div>
	</div>
</div>
