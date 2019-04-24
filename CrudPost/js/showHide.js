
$(document).ready(function() {

    $('#done, .card-action').hide();
    
    $('#edit_post, #edit_post_mobile').click(function() {
        $(this).hide();
        $('.card-action, #done').show();
    })

    $('#done').click(function() {
        $(this).hide();
        $('.card-action, #done').hide();
        $('#edit_post').show();
    })
    
});