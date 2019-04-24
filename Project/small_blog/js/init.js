(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

  $('.carousel').carousel();

  $('.collapsible').collapsible();

  // date table
  $('#dataTable').DataTable();

  // dialog form
  $('.modal').modal();

  // input type date
  $('#datepicker').datepicker({
    showOtherMonths: true
  });


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
