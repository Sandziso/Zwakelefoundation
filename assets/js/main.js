(function($) {
    "use strict";

    // Hide spinner after page load (fallback, even if CSS hides it)
    $(window).on('load', function() {
        $('#spinner').fadeOut('slow');
    });

    // Initiate WOW animations
    if (typeof WOW !== 'undefined') {
        new WOW().init();
    }

    // Sticky Navbar (adjusts on scroll)
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });

    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    $('.back-to-top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

    // Counter Up (if element exists and plugin loaded)
    if ($.fn.counterUp) {
        $('[data-toggle="counter-up"]').counterUp({
            delay: 10,
            time: 2000
        });
    }

    // Testimonials carousel (if element exists and plugin loaded)
    if ($.fn.owlCarousel) {
        $('.testimonial-carousel').owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            items: 1,
            dots: false,
            loop: true,
            nav: true,
            navText: [
                '<i class="bi bi-chevron-left"></i>',
                '<i class="bi bi-chevron-right"></i>'
            ]
        });
    }

})(jQuery);