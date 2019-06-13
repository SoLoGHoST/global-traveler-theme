<?php
	// Any php in here...
	global $home_video;
?>
	<?php 

	if (!empty($home_video))
		tif_get_template('inc/tif-video-modal.php', array('video' => $home_video));

	tif_get_template(tif_template_path('tif-search-modal'), array());
	wp_footer(); ?>
		</div>
	</div>
</body>
</html>