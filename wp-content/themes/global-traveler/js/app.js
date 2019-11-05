
function onElementHeightChange(elm, callback){
	var lastHeight = elm.clientHeight, newHeight;
	(function run(){
		newHeight = elm.clientHeight;
		if( lastHeight != newHeight )
			callback();
		lastHeight = newHeight;

        if(elm.onElementHeightChangeTimer)
          clearTimeout(elm.onElementHeightChangeTimer);

		elm.onElementHeightChangeTimer = setTimeout(run, 200);
	})();
}

var scrollLock = false;

jQuery(document).ready(function($) {


	function OpenPopupWindow(content, title, w, h, opts) {
       var _innerOpts = '';
       if(opts !== null && typeof opts === 'object' ){
           for (var p in opts ) {
               if (opts.hasOwnProperty(p)) {
                   _innerOpts += p + '=' + opts[p] + ',';
               }
           }
       }
         // Fixes dual-screen position, Most browsers, Firefox
       var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
       var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;
       var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
       var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
       var left = ((width / 2) - (w / 2)) + dualScreenLeft;
       var top = ((height / 2) - (h / 2)) + dualScreenTop;
       var w = window.open('', title, _innerOpts + ' width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
       $(w.document.body).html(content);
       // $(w.document.body).html('<!doctype html><html><head><meta charset="utf-8"><title>' + title + '</title></head>' + content + '</html>');
        // Puts focus on the newWindow
       if (window.focus) {
           w.focus();
       }
       return w;
    }


	var $navMenu = $('.header-1 .navbar'),
    	menuVal = $navMenu.offset().top;

	if ($('.header-ad').length)
	{
		onElementHeightChange($('.header-ad')[0], function() {
			menuVal = $('.header-1 .navbar').offset().top;
		});
	}

	$('select.select-excursion-tag, select.select-destination').on('change', function(e) {
		e.preventDefault();
		var $this = $(this);

		if ($this.val() !== '')
			document.location.href = $this.val();
	});

	if (Main.hasOwnProperty('newsletter_content')) {
		// @TODO:  Need to add Main.newsletter_content into the iframe with the id of "newsletter-body"

		$('.newsletter-link').click(function(e) {
			e.preventDefault();

			OpenPopupWindow(Main.newsletter_content, '', '700', '500', {toolbar: 'no', location: 'no', status: 'no', menubar: 'no', scrollbars: 'yes', resizable: 'yes'});
		});

		var iframe = $('<iframe />');
		iframe.attr('frameborder', '0').attr('width', '100%').attr('height', '100%').attr('src', 'data:text/html;charset=utf-8,' + encodeURIComponent(Main.newsletter_content));
		$('#newsletter-wrapper').append(iframe);
	}

	if ($('.posts-slider').length) {
		$('.posts-slider').slick({
			autoplay: false,
			autoplaySpeed: 8000,
			variableWidth: true,
			appendArrows: '.next',
			prevArrow: '',
			nextArrow: '<button type="button" class="slick-next btn btn-arrow">Next <span class="caret-arrow"></span></button>'
			// arrows: false
		});

		$('.posts-slider').on('mouseenter', '.slick-slide', function (e) {

			var $index = $(this).index();
			var $currTarget = $(e.currentTarget);

			if (!$currTarget.hasClass('slider-image-hover-' + $index))
				$currTarget.addClass('slider-image-hover-' + $index);

		}).on('mouseleave', '.slick-slide', function(e) {
			var $index = $(this).index();
			var $currTarget = $(e.currentTarget);

			if ($currTarget.hasClass('slider-image-hover-' + $index))
				$currTarget.removeClass('slider-image-hover-' + $index);
		});

		/*
		$('.events-slider .content .event-title').click(function() {
			$('.event-slider').slick('slickNext');
		});
		*/
	}

	$(window).on('scroll', function() {

		var scrollVal = $(this).scrollTop();

	    if (scrollVal >= menuVal && !scrollLock)
	    {
	    	if (!$('.sticky-nav').length)
	    	{
	    		var $stickyMenu = $('.header-1 .navbar').clone(true, true);

	    		if (!$('body').hasClass('sticky'))
	    			$('body').addClass('sticky');

	    		$stickyMenu.addClass('sticky-nav');
	    		$('body').append($stickyMenu);
	    	}
	    }
	    else
	    {
	    	if ($('.sticky-nav').length)
	    	{
	    		$('.sticky-nav').remove();

	    		if ($('body').hasClass('sticky'))
	    			$('body').removeClass('sticky');
	    	}

	    	scrollLock = false;
	    }
	});


	$('.navbar-toggler').click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		$('body').toggleClass('slide-menu-open');
	});

	$(document).on('click', '#overlay', function(e) {
		$('body').toggleClass('slide-menu-open');
	});

	// Dropdown Menu slide effect...
	$('.dropdown').on('show.bs.dropdown', function() {
	    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
	});

	$('.dropdown').on('hide.bs.dropdown', function() {
	    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(150);
	});

	if ($('body.single').length && $('#posts-section').length)
	{
		var bottom = 0;

		$('#posts-section').nextAll().each(function(i, obj) {
			bottom += $(obj).outerHeight();
		});

		if ($('.lock-scroll').length) {
			var el = $('.lock-scroll');
			var stickyTop = $('.lock-scroll').offset().top;
			var stickyHeight = $('.lock-scroll').height();

			$('.lock-scroll').css({position: 'absolute', top: 60});

			$(window).on('scroll', function() {

				if ($(window).width() >= 768)
				{
					var limit = $('.home-news-section').offset().top - stickyHeight - 230;
					var windowTop = $(window).scrollTop();

					if (stickyTop < windowTop) {
						el.css({ position: 'fixed', top: 160});
					} else {
						el.css({position: 'absolute', top: 60});
					}

					if (limit < windowTop) {
						var diff = limit - windowTop + 180;
						el.css({top: diff});
					}
				}
			});

			$(window).resize(function() {
				$(this).trigger('scroll');
			});
		}

	}

	var currentSelection = '';
	var topline_menu_deactivated = true;
	var siteapi_loaded = {
		trazeetravel: false,
		globalusa: false,
		whereverfamily: false,
		// Added static FX Excursions with no API call
		fxexcursions: true
	};

	$('.topline').on('mouseover', function(e) {
		e.preventDefault();
		e.stopPropagation();

		var $ele = $(e.target),
			$selected = $ele.closest('.topline').find('#section-' + $ele.data('site')),
			$sections = $ele.closest('.topline').find('.site-section');

		if ($ele.parent('li').hasClass('api-link')) {
			topline_menu_deactivated = false;
			currentSelection = $ele.data('site');
			$ele.parent('li').closest('.topline-menu').find('.external-link').removeClass('active');
			$sections.each(function(i, obj) {
				$(obj).removeClass('in');
			});

			if (!$selected.hasClass('in')) {
				$ele.parent('li').addClass('active');
				$selected.addClass('in');

				// Only perform ajax if not already loaded...
				if (siteapi_loaded.hasOwnProperty(currentSelection) && !siteapi_loaded[currentSelection]) {

					$('.ajax-loader').show();
					$.ajax({
						url: Main.ajax_url,
						type: 'post',
						data: {
							'action': 'load_site_posts',
							'security': Main.load_site_posts_nonce,
							'site': currentSelection
						},
						dataType: 'json'
					}).done(function(response) {
						if (response.hasOwnProperty('data') && response['data'] !== '') {
							$selected.html(response['data']);
							siteapi_loaded[currentSelection] = true;
						}
					}).always(function(response) {
						$('.ajax-loader').hide();
					});
				}
			}
		}

	});

	$(document).on('mousemove', function(e) {
		var $ele = $(e.target),
			$is_link = $ele.closest('.api-link').length,
			$is_section = (currentSelection != '' && ($ele.closest('#section-' + currentSelection).length || $ele.attr('id') == '#section-' + currentSelection));
			$sections = $('.topline').find('.site-section');

		if (!$is_link && !$is_section && !topline_menu_deactivated) {
			$('.ajax-loader').hide();
			$sections.each(function(i, obj) {
				$(obj).removeClass('in');
			});

			// Remove active class
			$('a#link-' + currentSelection).parent('.api-link').removeClass('active');

			// deactivate event for this until needed again
			topline_menu_deactivated = true;
		}
	}).on('click', '#link-whereverfamily', function(e) {
		e.preventDefault();

		// Enable if we want click event on link to trigger closing of dropdown menu...
		/*
		var $this = $(this),
			$site = $this.data('site');

		if ($site)
		{
			if ($('.topline').find('#section-' + $site).hasClass('in'))
			{
				var $sections = $('.topline').find('.site-section');

				$sections.each(function(i, obj) {
					$(obj).removeClass('in');
				});

				// Remove active class
				$('a#link-' + currentSelection).parent('.api-link').removeClass('active');

				// deactivate event for this until needed again
				topline_menu_deactivated = true;
			}
		}
		*/

	});
});
