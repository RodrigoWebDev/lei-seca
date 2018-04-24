$(function () {
    //Dropdown menu
    let index = 0;
    $("nav .fa-times-circle").click(function () {
        $(".drop-menu").hide(400);

    });
    
    $(".nav-button").click(function () {
        $(".drop-menu").show(400);

    });

});