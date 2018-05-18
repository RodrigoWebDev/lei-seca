(function($){

    $(".sub-menu").hide();
    //Dropdown menu
    $(".nav-button").click(function () {
        $(".drop-menu").show(400);

    });
    
    $("nav i").click(function(){
        $(".drop-menu").hide(400);
    });
    
    //Dropdown nav
    $("#menu-item-64").hover(function () {
        $("#menu-item-64 .sub-menu").toggle();

    });
    
    $("#menu-item-65").hover(function () {
        $("#menu-item-65 .sub-menu").toggle();

    });


})(jQuery);