/*
These functions make sure WordPress
and Foundation play nice together.
*/

var $ = jQuery;

jQuery(document).ready(function () {
	// global vars
	var download_page = '/starburst/download-starburst-enterprise-distribution-of-presto/',
			scrollingMenuHeight = 50;

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

	// smoothscroll init
	var scroll = new SmoothScroll('a[href*="#"]', {
		speed: 1000,
		easing: 'easeInOutQuart',
		offset: scrollingMenuHeight - 1, // know bug issue when using with below scrolling code, minus 1 to account for this issue.
		updateURL: true,
		popstate: true,
	});

	// add fixed position to scrolling menu
	if (jQuery('#page-scroll a').length > 0) {
		var topPos = jQuery('.page-block--inner-scroll').offset().top;
		jQuery(window).scroll(function () {
			var currentScroll = jQuery(window).scrollTop();
			if (currentScroll >= topPos) {
				jQuery('.page-block--inner-scroll').addClass('pos-fixed');
			} else {
				jQuery('.page-block--inner-scroll').removeClass('pos-fixed');
			}
			var scrollPos = $(document).scrollTop();
			jQuery('#page-scroll a').each(function () {
				var currLink = jQuery(this);
				var refElement = $(currLink.attr("href"));
				if (refElement.position().top <= scrollPos + scrollingMenuHeight && refElement.position().top + Math.ceil(refElement.height()) > scrollPos) {
					jQuery(this).siblings().each(function () {
						jQuery(this).removeClass('is-active');
					})
					jQuery(this).addClass('is-active');
				}
			});
		});
	}

	// multistep form behavior
	$('.js-button-next').on('click', function () {
		$(this).parent().parent().addClass('hidden-step').removeClass('current-step');
		$(this).parent().parent().next().removeClass('hidden-step').addClass('current-step');
	});
	$('.js-button-prev').on('click', function () {
		$(this).parent().parent().addClass('hidden-step').removeClass('current-step');
		$(this).parent().parent().prev().removeClass('hidden-step').addClass('current-step');
	});

	document.addEventListener('wpcf7mailsent', function (event) {
		if ("wpcf7-f4-o1" == event.detail.id) { // Change 123 to the ID of the form
			$('#try-presto h2').html('Thanks for your submission');
			$('#try-presto .wpcf7-form.sent').append('<div class="text-center mt30"><a href="' + download_page + '" class="button">Proceed to Download</a></div>');
		}
	}, false);

});

