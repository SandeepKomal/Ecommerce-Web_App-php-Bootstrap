(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: true,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }
		});

	};
	carousel();

})(jQuery);


function incrementValue(e) {
	e.preventDefault();
	var fieldName = $(e.target).data('field');
	var parent = $(e.target).closest('div');
	var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
  
	if (!isNaN(currentVal)) {
	  parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
	} else {
	  parent.find('input[name=' + fieldName + ']').val(0);
	}
  }
  
  function decrementValue(e) {
	e.preventDefault();
	var fieldName = $(e.target).data('field');
	var parent = $(e.target).closest('div');
	var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
  
	if (!isNaN(currentVal) && currentVal > 0) {
	  parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
	} else {
	  parent.find('input[name=' + fieldName + ']').val(0);
	}
  }
  
  $('.input-group').on('click', '.button-plus', function(e) {
	incrementValue(e);
  });
  
  $('.input-group').on('click', '.button-minus', function(e) {
	decrementValue(e);
  });