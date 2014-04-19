// Enables the primary menu toggle for smaller screens

jQuery(document).ready(function($) {

	$('#small-menu-pointer').click(function() {
		var menu = $('.main-navigation');
		menu.slideToggle('fast');
	});
	
	
});