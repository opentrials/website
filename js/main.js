jQuery(document).ready(function ($) {
    //Hide ShareThis
    $( ".st_sharethis_buttons" ).parent( "p" ).addClass( "hidden" );

    //smooth scrolling
    $('a').smoothScroll();

    // open (rel) external links in new window
    $('a[rel="external"]')
        .click( function() {
            window.open( $(this).attr('href') );
        return false;
    });

});
