$(document).ready(function() {
    $('#holdingpage').fullpage({
      responsive: 700,
      anchors:['info', 'register'],
    });
    
    //Hide ShareThis
    $( ".st_sharethis_buttons" ).parent( "p" ).addClass( "hidden" );
});