$( document ).ready(function() {

	$('.menu-toggle').click(function(){
		$(this).toggleClass('active');
		$(this).toggleClass('inactive');
		$('.nav').toggleClass('active');
		$('.nav').toggleClass('inactive');
	});

	$('.submit').click(function(){
		var billing = $('.billing').val() * 5 * 52;
		var total = $('.team').val() * billing;
		var money = "$" + total;
		$('.answer').show('slow');
		$('.answer .amount').html(money);
	});

	
	AOS.init({
		duration: 1000,
		easing: 'ease-out'
	});

	// Code to open / close accordion specs

	$('.specifications h3').click(function(e){
		//alert('yeah');
		$(this).find('.fas').toggleClass('open');
		$(this).next('.table-container').toggleClass('open');
	});


	/*$('.scroller').slick({
        dots: true,
        autoplay: true,
        infinite: true,
        slidesToShow: 1,
  		slidesToScroll: 1,
  		cssEase: "ease",
  		autoplaySpeed: 2000,
  		pauseOnFocus: false,
  		responsive: [
		    {
		      breakpoint: 900,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
    });*/

});