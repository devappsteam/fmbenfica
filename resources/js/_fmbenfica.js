(function ($) {
    "use strict";

    $(function () {
        $('#noticies_slider').owlCarousel({
            loop: true,
            responsiveClass: true,
            nav: false,
            dots: true,
            margin: 0,
            center: true,
            stagePadding: 300,
            smartSpeed: 2000,
            items: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 30,
                },
                800: {
                    items: 1,
                    stagePadding: 30,
                },
                1200: {
                    items: 1,
                    stagePadding: 300,
                }
            }
        });


        $('#programing_carousel').owlCarousel({
            loop: false,
            rewind: true,
            margin: 30,
            nav: false,
            dots: true,
            items: 4,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            lazyLoad: true,
            responsive: {
                0: {
                    items: 1,
                    dots: true,
                },
                600: {
                    items: 2,
                    dots: true,
                },
                1000: {
                    items: 4,
                    dots: true,
                }
            }
        });
    });

})(jQuery);