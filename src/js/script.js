$(document).ready(function() {

	// hover class addition for project link in the homepage's 'showcase' section

	$('.project__link').hover(
		function() {
			$(this).parents('.showcase-list__project').find('.sidebar').addClass('is-visible');
		}, 
		function() {
			$(this).parents('.showcase-list__project').find('.sidebar').removeClass('is-visible');
		}
	);


	// handles toggle event for the menu

	$('.js-menu-trigger').on('click', function() {
		$('.menu').toggle('animated pulse');
	});

});