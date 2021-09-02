jQuery(document).ready(function($) {
	
	// Initialize AOS
	AOS.init();
	
	// Mobile Menu
	$('#menu-nav-menu > .dropdown').append("<div class='nav-toggle'><i class='fas fa-chevron-down'></i></div>");
	
	$('#menu-nav-menu .dropdown .nav-toggle').click(function() {
		$(this).siblings('ul.dropdown-menu').slideToggle(300);
		$(this).toggleClass('active');
	});
	
	$('.navbar-toggler').click(function() {
		$('body').toggleClass('nav-open');
	});
	

	// companies page
	$(document).on('click', '.companies-alpha-link', function() {
		let group = $(this).attr('data-group');
		let target = $('.companies-group[data-group="' + group + '"]');
		if($(target).length > 0) {
			$('html, body').animate({
				scrollTop: $(target).offset().top - 50
			}, 100, 'linear');
		}
	})
}); /* end of as page load scripts */