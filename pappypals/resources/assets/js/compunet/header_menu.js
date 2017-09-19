var signUp = function () {

    init = function(){

    }
}

$(function() {
  if ($('body#SignupPage').length) {
    $('.btn.signup').prop("disabled", true);
    $("#vilkor").change(function() {
        if(this.checked) {
           $('.btn.signup').prop("disabled", false);
        }else{
          $('.btn.signup').prop("disabled", true);
        }
    });
  }

  $('.short_cuts').on('click', function(event) {        
    $('.dropdown-menu').toggle('show');
  });

});


