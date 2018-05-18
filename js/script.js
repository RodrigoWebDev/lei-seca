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
    $("#menu-item-82").hover(function () {
        $("#menu-item-82 .sub-menu").toggle();

    });
    
    $("#menu-item-83").hover(function () {
        $("#menu-item-83 .sub-menu").toggle();

    });


})(jQuery);