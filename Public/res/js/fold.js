/**
 * Õ¹¿ª
 * Created by zhangguixu on 2015/9/17.
 */
$(document).ready(function(){
    $(".fold_down").on("click",function(){
        $(".fold_hidden").slideDown(500);
        $(".fold_down").hide();
        $(".fold_up").show();
    });
    $(".fold_up").on("click",function(){
        $(".fold_hidden").slideUp(500);
        $(".fold_up").hide();
        $(".fold_down").show();
    });
});