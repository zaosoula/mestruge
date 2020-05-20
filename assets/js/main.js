(function($) {

	'use strict';

  $('.site-menu-toggle, .site-menu-toggle-label, .open-menu').click(function(){
    var $this = $('.site-menu-toggle, .site-menu-toggle-label');
    if ( $('body').hasClass('menu-open') ) {
      $this.removeClass('open');
      $('.js-site-navbar').fadeOut(400);
      $('body').removeClass('menu-open');
    } else {
      $this.addClass('open');
      $('.js-site-navbar').fadeIn(400);
      $('body').addClass('menu-open');
    }
  });

	// home slider
	$('.home-slider').owlCarousel({
    loop:true,
    autoplay: false,
    margin:10,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav:false,
    dots:true,
    autoplayHoverPause: true,
    items: 1,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
		autoHeight: false,
		autoHeightClass: 'owl-height',
		onInitialized: function() {
		    $('.slider').trigger('refresh.owl.carousel')
		}
	});


  var siteStellar = function() {
    $(window).stellar({
      responsive: false,
      parallaxBackgrounds: true,
      parallaxElements: true,
      horizontalScrolling: false,
      hideDistantElements: false,
      scrollProperty: 'scroll'
    });
  }
  siteStellar();

  var smoothScroll = function() {
    var $root = $('html, body');

    $('a.smoothscroll[href^="#"]').click(function () {
			let offset = 	$('.site-header').addClass('no-transition').addClass('scrolled').outerHeight()
			$('.site-header').removeClass('no-transition');
      $root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top - offset
      }, 500);
      return false;
    });
  }
  smoothScroll();


  var windowScroll = function() {

    $(window).scroll(function(){
      var $win = $(window);
      if ($win.scrollTop() > 200) {
        $('.js-site-header').addClass('scrolled');
      } else {
        $('.js-site-header').removeClass('scrolled');
      }

    });

  };
  windowScroll();

})(jQuery);
