$(document).ready(function() {
    //new slider
    $('.news').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows : false,
        dots: true,
    });
    
    //pop
    $('#signup-button').bind('click', function(e) {

        // Prevents the default action to be triggered. 
        e.preventDefault();

        // Triggering bPopup when click event is fired
        $('#signup-form').bPopup({
        });

    });
});