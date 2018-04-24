$(function () {
    //Dropdown menu
    $(".nav-button").click(function () {
        console.log("Hello");
        $(".drop-menu").show(400);

    });
    
    $("nav i").click(function(){
        console.log("teste");
        $(".drop-menu").hide(400);
    });
});