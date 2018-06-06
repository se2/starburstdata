/*
These functions make sure WordPress
and Foundation play nice together.
*/

var $ = jQuery;

jQuery(document).ready(function () {

	// Remove empty P tags created by WP inside of Accordion and Orbit
	jQuery('.accordion p:empty, .orbit p:empty').remove();

	// Adds Flex Video to YouTube and Vimeo Embeds
	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function () {
		if (jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5) {
			jQuery(this).wrap("<div class='widescreen responsive-embed'/>");
		} else {
			jQuery(this).wrap("<div class='responsive-embed'/>");
		}
	});

	$('.page-block--overlap-img').css('height', $('.page-block--overlap-img .overlap-img').height());

	// scrolling menu click to change active state
	jQuery('#page-scroll a').on('click', function () {
		jQuery(this).siblings().each(function () {
			jQuery(this).removeClass('is-active');
		})
		jQuery(this).addClass('is-active');
	});

	var scrollingMenuHeight = 50;

	// smoothscroll init
	var scroll = new SmoothScroll('a[href*="#"]', {
		speed: 1000,
		easing: 'easeInOutQuart',
		offset: scrollingMenuHeight,
		updateURL: true,
		popstate: true,
	});

	// add fixed position to scrolling menu
	var topPos = jQuery('.page-block--inner-scroll').offset().top;
	jQuery(window).scroll(function () {
		var currentScroll = jQuery(window).scrollTop();
		if (currentScroll >= topPos) {
			jQuery('.page-block--inner-scroll').addClass('pos-fixed');
		} else {
			jQuery('.page-block--inner-scroll').removeClass('pos-fixed');
		}
    var scrollPos = $(document).scrollTop();
		jQuery('#page-scroll a').each(function() {
			var currLink = jQuery(this);
			var refElement = $(currLink.attr("href"));
			if (refElement.position().top <= scrollPos + scrollingMenuHeight && refElement.position().top + refElement.height() > scrollPos) {
				jQuery(this).siblings().each(function () {
					jQuery(this).removeClass('is-active');
				})
				jQuery(this).addClass('is-active');
			}
		});
	});

});