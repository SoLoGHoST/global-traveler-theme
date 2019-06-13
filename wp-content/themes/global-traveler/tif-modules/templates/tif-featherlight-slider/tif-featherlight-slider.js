jQuery(document).ready(function($) {

	$('.featherlight-link').click(function() {
		$('#tif-featherlight-slider').find('.featherlight-first-slide').trigger('click');    
	});

	// Let the page load before calling the featherlightGallery plugin, makes images slide smoother!
	$(window).on('load', function() {
		if ($('#tif-featherlight-slider').length)
			$('#tif-featherlight-slider').featherlightGallery();
	});

});