$(document).ready(function(){
	$(".goods_parameters").click(function(){
		$(this).addClass("click_s");
		$(".goods_description").removeClass("click_s");
		$(".description").css("display","block");
		$(".parameters").css("display","none");
	});
	$(".goods_description").click(function(){
		$(this).addClass("click_s");
		$(".goods_parameters").removeClass("click_s");
		$(".description").css("display","none");
		$(".parameters").css("display","block");
	});
});