$('document').ready(function() {
  /* handle form validation */
  $("#register-form").validate({
      rules:
   {
   user_name: {
      required: true,
   minlength: 3
   },

   user_email: {
            required: true,
            email: true
            },
    },
       messages:
    {
            user_name: "please enter user name",

            user_email: "please enter a valid email address",

       },
    submitHandler: submitForm
       });
    /* handle form submit */
    function submitForm() {
    var data = $("#register-form").serialize();
    $.ajax({
    type : 'POST',
    url  : 'changes.php',
    data : data,
    beforeSend: function() {
     $("#error").fadeOut();
     $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
    },
    success :  function(response) {
        if(response==1){
			 $("#error").fadeIn(1000, function(){
			   $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
			   $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
			 });
        } else if(response=="registered"){
			 $("#btn-submit").html('<img src="ajax.gif" /> &nbsp; Signing Up ...');
			 setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("profile.php"); }); ',3000);
        } else {
         	$("#error").fadeIn(1000, function(){
      			$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+"Changes success"+' !</div>');
         		$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');


         	});
       	}
        }
    });
    return false;
  }
});
