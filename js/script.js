$(document).ready(function(){

    $(function () {
        var mainCarousel = $(".main-carousel"),
            owl = mainCarousel.find('.owl-carousel'),
            prev = $('.control-left'),
            next = $('.control-right');

        owl.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            dots: false,
        });

        prev.click(function () {
            owl.trigger('prev.owl.carousel',[500]);
        });

        next.click(function () {
            owl.trigger('next.owl.carousel',[500]);
        });
    })

    $(function () {
        var expertsIsotope = $('.experts-isotope');
        
        expertsIsotope.isotope({
            itemSelector: '.expert',
            layoutMode: 'fitRows'
        });
        $('.choix-theme').on('click','button', function () {

            $('.choix-theme').find('.active').removeClass('active');
            $(this).addClass('active');
            var filterValue = $(this).attr('data-theme');
            expertsIsotope.isotope({filter : filterValue});
            $('.select-theme').val(filterValue);
        })


        $('.select-theme').on('change',function () {
            var filterValue = $(this).val();
            expertsIsotope.isotope({filter : filterValue});
            $('.choix-theme').find('.active').removeClass('active');
            $('.choix-theme').find('[data-theme = "'+filterValue+'"]').addClass('active');
        })
    })



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
