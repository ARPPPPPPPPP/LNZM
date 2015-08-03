/**
 * Created by zhangguixu on 15/7/28.
 */
$(document).ready(function(){
    $(".subnav").hide();

    //下拉菜单
    $(".dropdown")
        .on("mouseover",function(){
            //$(this).children("ul").removeClass("hidden");
            $(this).children("ul").slideDown(200);
        })
        .on("mouseleave",function(){
            //$(this).children("ul").addClass("hidden");
            $(this).children("ul").hide();
        });
});
