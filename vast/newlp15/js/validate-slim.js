$(document).ready(function() {

	//registration form
	$('#form1').validate({
				submitHandler: function(form) {
					$.post('appointment-submit.php', $('#form1').serialize(), function(data) {
						if(data=="1"){
							$('.main-div').css({"visibility" : "visible"});
							$('.recive-head').css({"visibility" : "visible"});
							$('.main-container').css({"visibility" : "visible"});
							location.reload();
						}
						else
						{
							$('.main-div').css({"visibility" : "visible"});
							$('.recive-head').css({"visibility" : "visible"});
							$('.main-container').css({"visibility" : "visible"});
							$('.main-div').css({"visibility" : "visible"});
							location.reload();
						}
					});
				}
	    });
		
	$("#pincode1").keydown(function (e){
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
		
			
			
 $("#mobile1").keydown(function (e){
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
	    $("#btnsubmitt1").click(function(){
		var pincode=$("#pincode1").val();
	    var name=$("#name").val();
		var mobile1=$("#mobile1").val();
        var email1 = $("#email1").val();
	    var address1=$("#address1").val();
		var ddlstates1=$("#ddlstates1").val();
		var msg = $("#msg").val();
		
		if(pincode==""){
		    var x=$("#pincode1").css("left");
            var y=$("#pincode1").css("top");
            var w=$("#pincode1").width();
            //$(".mobile1number1").val(x + "-" + y + "-" + w);
            $("#pincode1").css({"border-top": "solid 2px #f00 "});
            $('#pincode1').focus();
         setTimeout(function(){
              //$('.mobile1number1 ~ span').remove();
                 $("#pincode1").css({"border-top": "solid 1px #F57E22 "});
            }, 4000);
      return false;
        } 
      else if(name==""){
		    var x=$("#name").css("left");
            var y=$("#name").css("top");
            var w=$("#name").width();
            //$(".mobile1number1").val(x + "-" + y + "-" + w);
            $("#name").css({"border-top": "solid 2px #f00 "});
            $('#name').focus();
         setTimeout(function(){
              //$('.mobile1number1 ~ span').remove();
                 $("#name").css({"border-top": "solid 1px #F57E22 "});
            }, 4000);
      return false;
        } 
		 else if(mobile1==""){
            var x=$("#mobile1").css("left");
            var y=$("#mobile1").css("top");
            var w=$("#mobile1").width();
            //$(".mobile1number1").val(x + "-" + y + "-" + w);
           $("#mobile1").css({"border-top": "solid 2px #F00 "});
            $('#mobile1').focus();
            setTimeout(function(){
              //$('.mobile1number1 ~ span').remove();
              $("#mobile1").css({"border-top": "solid 1px #F57E22 "});
            }, 4000);
		 return false;
        } 
      else if(email1==""){
            var x=$("#email1").css("left");
            var y=$("#email1").css("top");
            var w=$("#email1").width();
            //$(".mobile1number1").val(x + "-" + y + "-" + w);
           $("#email1").css({"border-top": "solid 2px #F00 "});
            $('#email1').focus();
            setTimeout(function(){
              //$('.mobile1number1 ~ span').remove();
              $("#email1").css({"border-top": "solid 1px #F57E22 "});
            }, 4000);
		 return false;
        } 
    else if(address1==""){
            var x=$("#address1").css("left");
            var y=$("#address1").css("top");
            var w=$("#address1").width();
            //$(".mobile1number1").val(x + "-" + y + "-" + w);
           $("#address1").css({"border-top": "solid 2px #F00 "});
            $('#address1').focus();
            setTimeout(function(){
              //$('.mobile1number1 ~ span').remove();
              $("#address1").css({"border-top": "solid 1px #F57E22 "});
            }, 4000);
		 return false;
        } 
		else if(ddlstates1=="0"){
            var x=$("#ddlstates1").css("left");
            var y=$("#ddlstates1").css("top");
            var w=$("#ddlstates1").width();
            //$(".mobile1number1").val(x + "-" + y + "-" + w);
           $("#ddlstates1").css({"border-top": "solid 2px #F00 "});
            $('#ddlstates1').focus();
            setTimeout(function(){
              //$('.mobile1number1 ~ span').remove();
              $("#ddlstates1").css({"border-top": "solid 1px #F57E22 "});
            }, 4000);
		 return false;
        } 
		 else if(msg==""){
            var x=$("#msg").css("left");
            var y=$("#msg").css("top");
            var w=$("#msg").width();
            //$(".mobile1number1").val(x + "-" + y + "-" + w);
           $("#msg").css({"border-top": "solid 2px #F00 "});
            $('#msg').focus();
            setTimeout(function(){
              //$('.mobile1number1 ~ span').remove();
              $("#msg").css({"border-top": "solid 1px #F57E22 "});
            }, 4000);
		 return false;
        } 
        else {
            return true;
        }
     });
	
	 
	});
	
	





   