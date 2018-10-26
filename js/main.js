function openNav() {
    document.getElementById("mySidenav").style.width = "80%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}



$('.contactMap')
	.click(function(){
			$(this).find('iframe').addClass('clicked')})
	.mouseleave(function(){
			$(this).find('iframe').removeClass('clicked')});
        