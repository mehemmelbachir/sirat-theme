(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		var nav = $('.nav');
		var initial_y = nav.offset().top;
		$(window).scroll(function () {
			if ($(this).scrollTop() > initial_y) {
				nav.addClass("fixed");
			} else {
				nav.removeClass("fixed");
			}
		});
		
	});
	
})(jQuery, this);
