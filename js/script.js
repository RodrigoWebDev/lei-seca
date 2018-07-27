(function ($) {

    $(".sub-menu").hide();
    //Dropdown menu
    $(".nav-button").click(function () {
        $(".drop-menu").show(400);

    });

    $("nav i").click(function () {
        $(".drop-menu").hide(400);
    });

    //Dropdown nav
    $("#menu-item-82").hover(function () {
        $("#menu-item-82 .sub-menu").toggle();

    });

    $("#menu-item-83").hover(function () {
        $("#menu-item-83 .sub-menu").toggle();

    });

    //smooth scroll
    $('a[href*="#"]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) {
                            return false;
                        } else {
                            $target.attr('tabindex', '-1');
                            $target.focus();
                        };
                    });
                }
            }
        });

    $('.phone_with_ddd').mask('(00) 0000-0000');



})(jQuery);
