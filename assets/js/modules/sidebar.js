$(document).ready(function () {
    $(".collapsible").on("click", function(){
        if($(this).hasClass("active")){
            $(this).removeClass("active");
            $(this).parent().find(".module-content").slideUp("slow");
        }else{
            $(".collapsible").removeClass("active");
            $(".module-content").slideUp("slow");
            $(this).addClass("active");
            $(this).parent().find(".module-content").slideDown("slow");
        }
    });
});