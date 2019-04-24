
$(document).ready(function() {
    $('#example').DataTable( {
        ajax:           "aData.json",
        deferRender:    true,
        scrollY:        200,
        scrollCollapse: true,
        scroller:       true
    } );
} );