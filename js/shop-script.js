$(document).ready(function() {
    $('#newsticker').jCarouselLite({
        btnPrev: "#news-up",
        btnNext: "#news-down",
        btnGo: null,
        mouseWheel: false,
        auto: false,
        hoverPause: true,
        speed: 500,
        easing: null,
        vertical: true,
        circular: true,
        visible:2,
        start: 0,
        scroll: 1,
        beforeStart: null,
        afterEnd: null
    });

    $(document).ready(function(){



        var $menu = $("#menu");



        $(window).scroll(function(){

            if ( $(this).scrollTop() > 548 && $menu.hasClass("menu") ){

                $menu.removeClass("menu").addClass("fixed");

            } else if($(this).scrollTop() <= 548 && $menu.hasClass("fixed")) {

                $menu.removeClass("fixed").addClass("menu");

            }

        });//scroll

    });


});

