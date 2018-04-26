$(function () {
    //Dropdown menu
    $(".nav-button").click(function () {
        $(".drop-menu").show(400);

    });
    
    $("nav i").click(function(){
        $(".drop-menu").hide(400);
    });
});