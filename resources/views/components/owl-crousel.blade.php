$(document).ready(function() {
    $('.owl-product').owlCarousel({
        loop: false,
        rtl: true,
        dots: false,
        nav: true,
        responsive: {
        
            0: {
                items: 4

            },
            600: {
                items: 4

            },
            1330: {
                items: 4

            },
            1350: {
                items: 5
            }
        }
    })
    $('.owl-uy').owlCarousel({
        loop: false,
        rtl: true,
        dots: false,
        nav: true,
        items: true,
        responsive: {
            0: {
                items: 3

            },
            600: {
                items: 3

            },
            1000: {
                items: 3

            },
            1300: {
                items: 4
            }
        }
    })
    $('.owl-pishnahad-lahzei').owlCarousel({
        loop: false,
        rtl: true,
        dots: false,
        nav: true,
        items: true,
        responsive: {
            0: {
                items: 4

            },
            600: {
                items: 4

            },
            1330: {
                items: 4

            },
            1350: {
                items: 5
            }
        }
    })


});