$(document).ready(function(){
    $(".main-carousel .owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        dots: false,
    });


    /********************************
     Nav menu hover
     ********************************/

    function bootstrapNavHover() {
        var windowWidth = $(window).width();
        if(windowWidth > 769){
            $('ul.nav li.dropdown').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });
        }
    }
    $(window).resize(bootstrapNavHover())
    bootstrapNavHover();


});
