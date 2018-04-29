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
    $(".menu-item-26").hover(function () {
        $(".menu-item-26 .sub-menu").toggle();

    });
    
    $(".menu-item-23").hover(function () {
        $(".menu-item-23 .sub-menu").toggle();

    });


})(jQuery);