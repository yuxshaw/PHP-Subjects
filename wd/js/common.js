//一二级导航选项卡
$(function () {
    $(".nav > li > a").mouseenter(function () {
        // var index = $(this).index();
        $(this).addClass("btn-active").parent().siblings("li").children("a").removeClass("btn-active");
        // console.log(index);
        // var uls = $(".nav > li > ul");
        // console.log(uls);
        // $(uls.get(index)).show().parent().siblings("li").children("ul").hide();
        $(this).siblings("ul").slideDown(300);
        $(this).parent().siblings("li").children("ul").hide();
    });
    // console.log($(".nav > li > a"));
});