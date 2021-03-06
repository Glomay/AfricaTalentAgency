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
        var homeSectionActualite = $('.actu'),
            owl = homeSectionActualite.find('.owl-carousel');

        owl.owlCarousel({
            loop:false,
            margin: 15,
            responsive:{
                0:{
                    items:1
                },
                767:{
                    items:2
                },
                1280:{
                    items:3
                }
            }
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


    var btt = $('.back-to-top');

    btt.on('click', function () {

        $('html, body').animate({

            scrollTop: 0

        }, 800, function () {

            btt.fadeOut();

        });

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
    
    
    $(function () {
        var countryCarousel = $(".country-carousel"),
            owl = countryCarousel.find(".owl-carousel");

        owl.owlCarousel({
            items: 10
        });
    })


    /********************************
     Magnific Popup
     ********************************/


    $('.gallerie-photos').each(function () {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled:true
            }
        });
    });

    $('.lecteur-video').magnificPopup({
        delegate: 'a',
        type: 'iframe'
    });


});
