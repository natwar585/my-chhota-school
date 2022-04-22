(function ($) {
    'use strict';
// Pre-Loader
    $(window).on('load',function(){
        var preLoder = $(".preloader");
        preLoder.fadeOut(1000);
    });

// Carousel

    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 3000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    });
// Bottom Header (Navbar)

    $(window).on('scroll', function(){
        if($(window).scrollTop() > 200) {
            $('.bottom-header').addClass('fixed-header');
            if ($(window).width() < 992) {
                header.removeClass('fixed-header');
            }
        } else {
            $('.bottom-header').removeClass('fixed-header');
        }
    });


// Admission Table

   // $(document).ready(function(){
   //      $(".content .radio_content").hide();
   //      $(".content .radio_content:first-child").show();
   //      $(".radio_wrap").click(function(){
   //          var current_radio = $(this).attr("data-radio");
   //          $(".content .radio_content").hide();
   //          $("."+current_radio).show();
   //      });

   //  });

}(jQuery));