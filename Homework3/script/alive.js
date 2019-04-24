

$(document).ready(function(){

    // ========scroll to top=========
    var offset = 100;
    var duration = 700;

    $(window).scroll(function(){
        if($(this).scrollTop() > offset) {
            $('#iconUp').fadeIn(duration);
        } else {
            $('#iconUp').fadeOut(duration);
        }
    });

    $('#iconUp').click(function(){
        $("html, body").animate({ scrollTop: 0 }, duration);
        return false;
    });   

});