
window.addEventListener("load", e => {
    $('.slider .owl-carousel').owlCarousel({
        loop: true,
        lazyLoad: true,
        nav: false,
        autoplay: true,
        items: 1
    });
    function s() {
        dataLayer.push(arguments)
    }
    setTimeout(function () {

        $(".tab-pane .owl-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            nav: false,
            // navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            margin: 10,
            responsiveClass: true,
            responsive: { 0: { items: 1, }, 600: { items: 2,  }, 768: { items: 3 }, 1000: { items: 4, loop: true } },

        });
        $(".testimonials .owl-carousel").owlCarousel({
            dots: false,
            loop: true,
            nav: false,
            // navText: ["", '<img  alt="Oxo Packaging"  srcset="assets/images/arrow-img-right.webp 800w, assets/images/arrow-img-right.webp 400w" sizes="(min-width: 400px) 400px, 400px" width="60px" height="60px" src="assets/images/arrow-img-right.webp" >'],
            margin: 0,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                  
                },
                600: {
                    items: 1,
                    
                },
                1000: {
                    items: 1,
                   
                },
                1900: {
                    items: 1,
                   
                }
            }
        });
        $("#banner").removeClass("ban_slider");
    }, 3000)


});




