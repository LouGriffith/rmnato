// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(window).bind("load", function () {
	var footer = $("#footer");
	var pos = footer.position();
	var height = $(window).height();
	height = height - pos.top;
	height = height - footer.height();
	if (height > 0) {
	    footer.css({
	        'margin-top': height + 'px'
	    });
	}

	{
	  // specify the class used for active sections
	  active_class: 'active',
	  // how many pixels until the magellan bar sticks, 0 = auto
	  threshold: 0,
	  // pixels from the top of destination for it to be considered active
	  destination_threshold: 20,
	  // calculation throttling to increase framerate
	  throttle_delay: 50 
	}
});