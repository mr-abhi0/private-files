$(document).ready(function() {

	//registration form
	$('#appointmentForm').validate({
				submitHandler: function(form) {
					$.post('appointment-submit.php', $('#appointmentForm').serialize(), function(data) {
						if(data=="1"){
							
							
							$('.form-div').css({"visibility" : "hidden"});
							$('.form-head').css({"visibility" : "hidden"});
							$('.form-container').css({"visibility" : "hidden"});
							$('.main-div').css({"visibility" : "visible"});
							$('.recive-head').css({"visibility" : "visible"});
							$('.main-container').css({"visibility" : "visible"});
							$('.main-container p').html("Your Appointment Fix");
							location.reload();
						}
						else
						{
							
							$('.form-div').css({"visibility" : "hidden"});
							$('.form-head').css({"visibility" : "hidden"});
							$('.form-container').css({"visibility" : "hidden"});
							$('.main-div').css({"visibility" : "visible"});
							$('.recive-head').css({"visibility" : "visible"});
							$('.main-container').css({"visibility" : "visible"});
							$('.main-div').css({"visibility" : "visible"});
							
							location.reload();
						}
					});
				}
	    });
		
		
			
 $("#patient-phone").keydown(function (e){
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
		 //registration form
	    
	
	 $("#patient-submit").click(function(){
	    var patient_name=$("#patient-name").val();
        var patient_email = $("#patient-email").val();
	    var patient_phone=$("#patient-phone").val();
		var patient_date=$("#patient-date").val();
		var patient_subject=$("#patient-subject").val();
		var patient_msg = $("#patient-msg").val();
		
		
       if(patient_name==""){
		    var x=$("#patient-name").css("left");
            var y=$("#patient-name").css("top");
            var w=$("#patient-name").width();
            //$(".patient-phonenumber1").val(x + "-" + y + "-" + w);
            $("#patient-name").css({"border-top": "solid 2px #f00 "});
            $('#patient-name').focus();
         setTimeout(function(){
              //$('.patient-phonenumber1 ~ span').remove();
                 $("#patient-name").css({"border-top": "solid 1px #F57E22 "});
            }, 4000);
      return false;
        } 
      else if(patient_email==""){
            var x=$("#patient-email").css("left");
            var y=$("#patient-email").css("top");
            var w=$("#patient-email").width();
            //$(".patient-phonenumber1").val(x + "-" + y + "-" + w);
           $("#patient-email").css({"border-top": "solid 2px #F00 "});
            $('#patient-email').focus();
            setTimeout(function(){
              //$('.patient-phonenumber1 ~ span').remove();
              $("#patient-email").css({"border-top": "solid 1px #F57E22 "});
            }, 4000);
		 return false;
        } 
    
      else if(patient_phone==""){
            var x=$("#patient-phone").css("left");
            var y=$("#patient-phone").css("top");
            var w=$("#patient-phone").width();
            //$(".patient-phonenumber1").val(x + "-" + y + "-" + w);
           $("#patient-phone").css({"border-top": "solid 2px #F00 "});
            $('#patient-phone').focus();
            setTimeout(function(){
              //$('.patient-phonenumber1 ~ span').remove();
              $("#patient-phone").css({"border-top": "solid 1px #F57E22 "});
            }, 4000);
		 return false;
        } 
		 else if(patient_date==""){
            var x=$("#patient-date").css("left");
            var y=$("#patient-date").css("top");
            var w=$("#patient-date").width();
            //$(".patient-phonenumber1").val(x + "-" + y + "-" + w);
           $("#patient-date").css({"border-top": "solid 2px #F00 "});
            $('#patient-date').focus();
            setTimeout(function(){
              //$('.patient-phonenumber1 ~ span').remove();
              $("#patient-date").css({"border-top": "solid 1px #F57E22 "});
            }, 4000);
		 return false;
        } 
		 else if(patient_subject==""){
            var x=$("#patient-subject").css("left");
            var y=$("#patient-subject").css("top");
            var w=$("#patient-subject").width();
            //$(".patient-phonenumber1").val(x + "-" + y + "-" + w);
           $("#patient-subject").css({"border-top": "solid 2px #F00 "});
            $('#patient-subject').focus();
            setTimeout(function(){
              //$('.patient-phonenumber1 ~ span').remove();
              $("#patient-date").css({"border-top": "solid 1px #F57E22 "});
            }, 4000);
		 return false;
        } 
		 else if(patient_msg==""){
            var x=$("#patient-msg").css("left");
            var y=$("#patient-msg").css("top");
            var w=$("#patient-msg").width();
            //$(".patient-phonenumber1").val(x + "-" + y + "-" + w);
           $("#patient-msg").css({"border-top": "solid 2px #F00 "});
            $('#patient-msg').focus();
            setTimeout(function(){
              //$('.patient-phonenumber1 ~ span').remove();
              $("#patient-msg").css({"border-top": "solid 1px #F57E22 "});
            }, 4000);
		 return false;
        } 
        else {
            return true;
        }
     });
	});
	
	





   