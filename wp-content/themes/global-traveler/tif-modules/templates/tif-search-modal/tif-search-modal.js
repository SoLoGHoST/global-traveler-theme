var $ = jQuery.noConflict();

$(document).ready(function() {

	// Don't want to interfere with anything on the site, if this module is not being used!
	if ($('#tif-search-modal').length)
	{
		$('.search-field').on('input', function(e) {
			$(this).closest('form').prev('.underline').text($(this).val());
		});

		$('#tif-search-modal').on('shown.bs.modal', function() {

			var search_field = $('#searchform').find('.search-field'),
				search_val = search_field.val();

			if (search_val.length > 1)
				search_field.focus().val('').val(search_val);
			else
				search_field.focus();
		});
	}

});
