$(window).scroll(function(){
  $(".down").css("opacity", 1 - $(window).scrollTop() / 250); 
//250 is fade pixels
});

$(document).ready(function(){
	$(".hamburger").click(function(){
	  $(this).toggleClass("is-active");
	});
  });
