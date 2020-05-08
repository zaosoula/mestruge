(function($) {

	'use strict';

	// home slider
	$('.block-slider').owlCarousel({
    autoplay: true,
    margin:30,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    autoplayHoverPause: true,
    autoheight: true,
		nav: false,
    // navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:false,
				loop: true,
				dots: true,
				center: true
      },
      1024:{
        items:2,
        nav:false,
				loop:false,
				dots: false
      }
    }
	});

	// $('#checkin_date, #checkout_date').datepicker({
	// 	'format': 'd MM, yyyy',
	// 	'autoclose': true
	// });

	$('[data-selected-lang]').click(function(e) {
		e.preventDefault();
		Cookies.set('lang', $(this).data('selected-lang'));

		$('html, body').animate({ scrollTop: 0 }, "fast", function(){
			location.reload(true);
		}); // Go
	});

	$('.site-navbar .menu li').each(function(){
		if( $(this).find('a').attr('href') == location.href) $(this).addClass("active");
	});
})(jQuery);
