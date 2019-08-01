$(document).ready(function(){
	$("#u_center").mouseenter(function(){
			$("#user_c").slideDown();

		}).mouseleave(function(){
			$("#user_c").slideUp();

	});
	$(".select_goods").click(function(){
		$(this).children(".select_list").fadeIn("slow");
	}).mouseleave(function(){
		$(this).children(".select_list").slideUp();
	});
	$(".select_list ul li").mouseenter(function(){
		$(this).children("ul").fadeIn("slow");
	}).mouseleave(function(){
		$(this).children("ul").slideUp();
	});
});