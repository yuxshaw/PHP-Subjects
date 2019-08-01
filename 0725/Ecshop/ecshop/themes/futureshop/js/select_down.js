$(document).ready(function(){
	$(".screen ul li").mouseenter(function(){
		$(this).find("ul").slideDown();
	}).mouseleave(function(){
		$(this).find("ul").slideUp();
	});
	
});