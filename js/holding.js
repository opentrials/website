jQuery(document).ready(function ($) {
    //new slider
    $('.page-template-page-holding-php .news').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows : false,
        dots: true,
    });
    $('.page-template-page-home .news').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
    });

    //pop
    $('#signup-button').bind('click', function(e) {
        // Prevents the default action to be triggered.
        e.preventDefault();
        // Triggering bPopup when click event is fired
        $('#signup-form').bPopup({
        });
    });
    $('.page-template-page-home .cta').bind('click', function(e) {
        // Prevents the default action to be triggered.
        e.preventDefault();
        // Triggering bPopup when click event is fired
        $('.page-template-page-home .video').bPopup({
            content:'iframe',
            contentContainer:'.videoWrapper',
            loadUrl:'https://www.youtube.com/embed/ngVYptGuK0E?rel=0&amp;showinfo=0',
            onClose: function() {
                location.reload(); //workaround for video not loading second time around
            }
        });
    });
});
