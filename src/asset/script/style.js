$(document).ready(function(){
  $(window).on('load', function() {
  	$("#loader").delay(1200).fadeOut();
  });

  $(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
});


// Hide and show password
