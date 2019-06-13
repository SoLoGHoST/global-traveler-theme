jQuery(document).ready(function($) {

	var footer_offset = $('footer').length ? $('footer').offset().top : $('#content')[0].scrollHeight;

	// console.log(noMoreLeft);
	// console.log(footer_offset);

	// AJAX Scroll...
	$(window).scroll(function() {

		// if($(this).scrollTop() + $(this).innerHeight()>=$(this)[0].scrollHeight)
	    scrollDistance = $(window).scrollTop() + $(window).innerHeight();
	    footerDistance = footer_offset - 200; // $('#bottom').offset().top;

	    // console.log(scrollDistance + ' = ' + footerDistance);

	    if (scrollDistance >= footerDistance && !noMoreLeft) {
	    	// Temporarily LOCK out this function from being hit again and again...
	        noMoreLeft = true;

	        var $wrapper = $('#content'),
	        	$start = $('.post-item').length + (Scroll.haspostinhero ? 1 : 0),
	        	$args = $('input#args').length ? JSON.parse(JSON.stringify($('input#args').val())) : {},
	        	randomSponsor = 0,
	        	sponsors = [],
	        	randomSponsors = [];

	        if (Scroll.reversePattern)
        		thePattern = thePattern.reverse();

        	/*
        	if (theAds.length)
        	{
        		theAds = shuffle(theAds);
        		randomAd = theAds.pop();
        	}
        	*/
        	
        	if (typeof allSponsors !== 'undefined' && allSponsors.length)
        	{
	        	for(var x = 0, len = allSponsors.length; x < len; x++)
	        	{
	        		if ($.inArray(allSponsors[x], excludedSponsors) === -1)
	        			sponsors.push(allSponsors[x]);
	        	}

        		for(var i = 0, iLen = thePattern.length; i < iLen; i++)
    			{
    				if (thePattern[i] == 3)
    				{
    					if (sponsors.length && sponsors.length > 1)
    					{
			        		var randKey = Math.floor(Math.random() * sponsors.length);
			        		randomSponsors.push(sponsors[randKey]);

			        		sponsors.splice(randKey, 1);
			        	}
			        	else if (sponsors.length && sponsors.length === 1)
			        	{
			        		randomSponsors.push(sponsors[sponsors.length - 1]);

			        		// Clear out this array...
			        		sponsors.splice(0, 1);
			        	}
		        	}
	        	}
		    }

        	// If no ad found, than we need to get an additional post for the 2nd template set.
        	if (Scroll.is_home)
	        	thePattern[1] = typeof adGroup !== 'undefined' && adGroup ? 5 : 6;

	        $.ajax({
				url: Scroll.ajax_url,
				type: 'post',
				data: {
					action: 'tif_posts_scroll',
					security: Scroll.scroll_posts_nonce,
					start: $start,
					args: $args,
					pattern: thePattern,
					adgroupid: typeof adGroup !== 'undefined' && adGroup ? adGroup : 0,
					rand_sponsors: JSON.stringify(randomSponsors),
					all_sponsors: typeof allSponsors !== 'undefined' && allSponsors.length ? JSON.stringify(allSponsors) : '[]',
					posts_per_page: 12
				},
				dataType: 'json'
			}).done(function(response) {

				if (response.hasOwnProperty('error'))
					alert(response['error']);
				else if (response.hasOwnProperty('posts')) {

					var $divWrap = $('<div />').addClass('container-fluid').addClass('no-pad').addClass('d-flex'),
						$divInner = $('<div />').addClass('section').addClass('content');

					if (!Scroll.is_home)
						$divInner.addClass('py-4');

					$divInner.append(response['posts']);
					$divWrap.append($divInner);
					$wrapper.append($divWrap);

					if (randomSponsors)
					{
						for(var p = 0, pLen = randomSponsors.length; p < pLen; p++)
							excludedSponsors.push(randomSponsors[p]);
					}

					// reset the footer_offset...
					footer_offset = $('footer').length ? $('footer').offset().top : $('#content')[0].scrollHeight;
					noMoreLeft = !response['has_more'];

					// if response comes back with no more left, and category ($args_val is not empty) is defined than we need to set the category to be excluded and load more posts still...
					// We will need to replace args input value to exclude the cat instead of include it...
				}
			}).fail(function(response) {
				alert('An Error Occurred.');
			});
	    }
	});
});


function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}