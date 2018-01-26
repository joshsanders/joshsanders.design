$(document).ready(function() {

	// hover class addition for project link in the homepage's 'showcase' section

	// $('.project__link').hover(
	// 	function() {
	// 		$(this).parents('.showcase-list__project').find('.sidebar').addClass('is-visible');
	// 	}, 
	// 	function() {
	// 		$(this).parents('.showcase-list__project').find('.sidebar').removeClass('is-visible');
	// 	}
	// );


	// handles toggle event for the menu

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

	// $('.js-menu-trigger').on('click', function() {
	// 	$('.menu').removeClass('bounceOutUp').addClass('bounceInDown').toggleClass('is-visible');
	// });

	// $('.js-close-menu').on('click', function() {
	// 	$('.menu').removeClass('bounceInDown').queueAddClass('bounceOutUp').delay(3000).queueRemoveClass('is-visible');
		
	// });

	$('.js-menu-trigger').on('click', function(e) {
		 e.preventDefault();

		$('.menu-container').removeClass('fadeOut').addClass('fadeIn').toggleClass('is-open');
		$('body').css('overflow', 'hidden');
	});

	$('.js-close-menu').on('click', function(e) {
		 e.preventDefault();

		$('.menu-container').removeClass('fadeIn').queueAddClass('fadeOut').queueRemoveClass('is-open');
		$('body').css('overflow', 'auto');
	});


	

	// $('.js-menu-trigger').on('click', function() {
	// 	$('.menu').addClass('animated fadeInDown').toggleClass('is-visible');
	// });

});
