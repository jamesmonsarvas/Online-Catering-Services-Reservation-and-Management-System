$(function () {

  $('#services-img').change(function(){
    $('#services-img').parent().submit();
  });

  $('#service-summary-btn').click(function(){
    $('.fieldset-summary').css('display', 'block');
    $('.fieldset-desc').css('display', 'none');
  });

  $('#service-desc-btn').click(function(){
    $('.fieldset-desc').css('display', 'block');
    $('.fieldset-summary').css('display', 'none');
  });

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