$(window).scroll(function(){
  $(".down").css("opacity", 1 - $(window).scrollTop() / 250); 
//250 is fade pixels
});


$(window).scroll(function () {
	if ($(this).scrollTop() > 50) {
		 $('header').addClass('changeColor')
	}
	if ($(this).scrollTop() < 50) {
		$('header').removeClass('changeColor')
	}
});

$(document).ready(function(){
	$(".hamburger").click(function(){
	  $(this).toggleClass("is-active");
	});
	});