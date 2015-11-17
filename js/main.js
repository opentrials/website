$(document).ready(function() {
    //Hide ShareThis
    jQuery( ".st_sharethis_buttons" ).parent( "p" ).addClass( "hidden" );

    //smooth scrolling
    jQuery('a').smoothScroll();

    // open (rel) external links in new window
    jQuery('a[rel="external"]')
        .click( function() {
            window.open( $(this).attr('href') );
        return false;
    });

});
