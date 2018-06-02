$(document).ready(function() {

	// handles toggle event for the menu
	// the following queue functions should be unnecessary once anime.js is fully explored

	// will probabaly have to remove this once the blob is gone

	

	// wrapper function for queueAddClass and chaining
	$.fn.queueAddClass = function(className) {
	    this.queue('fx', function(next) {
	        $(this).addClass(className);
	        next();
	    });
	    return this;
	};

	// wrapper function for queueRemoveClass to end chaining
	$.fn.queueRemoveClass = function(className) {
	    this.queue('fx', function(next) {
	        $(this).removeClass(className);
	        next();
	    });
	    return this;
	};

	$('.js-menu-trigger').on('click', function(e) {
		 e.preventDefault();

		$('.menu-container').removeClass('fadeOut').addClass('fadeIn').toggleClass('is-open');
		// $('body').css('overflow', 'hidden');
		$('html').addClass('menu-is-open');
	});

	$('.js-close-menu').on('click', function(e) {
		 e.preventDefault();

		$('.menu-container').removeClass('fadeIn').queueAddClass('fadeOut').queueRemoveClass('is-open');
		// $('body').css('overflow', 'auto');
		$('html').removeClass('menu-is-open');
	});
	

	// $('.js-menu-trigger').on('click', function() {
	// 	$('.menu').removeClass('bounceOutUp').addClass('bounceInDown').toggleClass('is-visible');
	// });

	// $('.js-close-menu').on('click', function() {
	// 	$('.menu').removeClass('bounceInDown').queueAddClass('bounceOutUp').delay(3000).queueRemoveClass('is-visible');
		
	// });

	


	

	// $('.js-menu-trigger').on('click', function() {
	// 	$('.menu').addClass('animated fadeInDown').toggleClass('is-visible');
	// });

});
