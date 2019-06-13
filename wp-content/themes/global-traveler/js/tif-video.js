

jQuery(document).ready(function($) {
	$('#videoModal').on('shown.bs.modal', function () {
		$('#video-gpro')[0].play();
	});

	$('#videoModal').on('hidden.bs.modal', function () {
		$('#video-gpro')[0].pause();
	});

	$(window).on('load', function() {
		$('#videoModal').modal('show');
	});

	$('#video-gpro').on('ended', function() {
		$('#videoModal').modal('hide');
	});

	$('.unmute').on('click', function() {
		$('#video-gpro')[0].muted = false;
		$(this).remove();
	});

})