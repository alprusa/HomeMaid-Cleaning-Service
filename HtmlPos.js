$(window).resize(function() {
      $('.infoText').each(function(i, iT) {
	    $('.infoImg').each(function(i, iI) {
	    	if(window.innerWidth <= 780)
		    	$(iT).insertBefore($(iI).prev());
		    else
		    	$(iI).insertBefore($(iT).prev());
		});
	});
});