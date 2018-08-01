$(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 10) {
            $('#header').addClass("sticky");
        }
        else {
            $('#header').removeClass("sticky");
        }
    });

    /** Preloader */

	$(window).on('load', function () { // makes sure the whole site is loaded 
		$('#status').fadeOut(); // will first fade out the loading animation 
		$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
		$('body').delay(350).css({ 'overflow': 'visible' });
    })
    
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide"
        });
    });

});