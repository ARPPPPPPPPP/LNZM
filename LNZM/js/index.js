/**
 * 处理主页
 * 1）下拉导航
 * 2）图片轮播
 * 3）图片模块
 * Created by zhang on 2015/7/23.
 */
var t,n=0;

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
    //轮播
    $("#bgPic a:not(:first-child)").hide();
    $("#smallDiv li").click(function(){
       var i=$(this).text()-1;
        n=i;
        if(i>3)return;
        $("#bgPic a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000);
        $(this).toggleClass("active");
        $(this).siblings().removeAttr("class");

    });
     t=setInterval("showAuto()",5000);
    $("#bgPic").hover(function(){
       clearInterval(t)}
        ,function(){t=setInterval("showAuto()",5000);}
    );

    //图片模块
    $(".bar").hide();
    $("#area-2 a").hover(function(){
       $(this).children(".bar").fadeIn(300);
    },function(){
        $(this).children(".bar").hide();
    });
});

function showAuto(){
    n=n>=3?0:++n;
    $("#smallDiv li").eq(n).trigger('click');
}



