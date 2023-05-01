function placeordernow(){
/*    var firstname = $('#input-firstname').val();
	var lastname = $('#input-lastname').val();
	var address1 = $('#input-address-1').val();
	var address2 = $('#input-address-1').val();
	var city = $('#input-city').val();
	var state = $('#input-state').val();
	var postcode = $('#input-postcode').val();*/
	
	var fullname = $('#Full_Name').val();
	var telephone = $('#input-telephone').val();
	var email = $('#input-email').val();

//	var platform = $('#platform').val();

	var leadcode = "Mens Booster";


    if(fullname.length<3){alert("Enter valid Full Name")}
   // else if(lastname.length<3){alert("Enter valid Last Name")}
    else if(telephone.length<10){alert("Enter valid Mobile Number")}
    else if(email.length<8){alert("Enter valid Email")}
  //  else if(address1.length<6){alert("Enter valid Address")}
    //else if(address2.length<6){alert("Enter valid Address")}
    
//    else if(postcode.length<6){alert("Enter valid PIN Code")}
 //   else if(city.length<3){alert("Enter valid City")}
  // else if(state.length<3){alert("Select valid State")}
	else{
	    $.ajax({
				type : 'post',
				url : 'https://trickveda.in/mbooster/js/server.php',
				data : {'type':'001','fullname':fullname, 'telephone':telephone, 'email':email, 'leadcode':leadcode},
				beforeSend:function(){
				   // $("#submit").prop("disabled", true); 
				    $("#load_status").html("Processing Your Order Please Wait....");
						},
				success : function (res){
	    				   // $("#submit").prop("disabled", false); 
			                 if(isNaN(res)==false){
			                     $("#load_status").html("Redirecting");
								console.log(res); 
							//	var address=address1 + address2 + city + state + postcode;
							    window.localStorage.setItem('order_id', res); window.localStorage.setItem('fullname', fullname); 
							  //  window.localStorage.setItem('address', address); window.localStorage.setItem('lastname', lastname); 
							    window.localStorage.setItem('email', email);
							    //window.localStorage.setItem('address1', address1); 
							    //window.localStorage.setItem('city', city); //window.localStorage.setItem('state', state); 
							    //window.localStorage.setItem('postcode', postcode); 
							    window.localStorage.setItem('telephone', telephone); 
							    
								unhook();
						        if(platform=='pc'){
						            window.location.href="checkout.html";
						            
						        }else{
						            window.location.href="product.html";
						            }
							}else{
			                     $("#load_status").html("Something Went Wrong Please Try Again Our Contact Our Support");
							     $("#btnSubmit").removeAttr('disabled');
								alert("Something Went Wrong Please Try Again Our Contact Our Support");
								console.log(res);
							}
						

	
						}	
					});
	}
}
function loaduserdata(){
	var fullname  = window.localStorage.getItem("fullname");
//	var lastname  = window.localStorage.getItem("lastname");
//	var address  = window.localStorage.getItem("address");
	var telephone  = window.localStorage.getItem("telephone");
	var email  = window.localStorage.getItem("email");
//	var fullname=firstname+ " " +lastname;
   // $("#Full_Name").html(fullname);
     $("#Full_Name").val(fullname);
   // $("#address").html(address);
   // $("#phone").html(telephone);
     $("#input-telephone").val(telephone);
   // $("#email").html(email);
    $("#input-email").val(email);
    
//alert(fullname);
}
function mobilecheckout(pro){
    unhook();
     window.localStorage.setItem('pro', pro)
    window.location.href="cart.html";
}
function loadOrdersummery(){
    loaduserdata();
    var chk  = window.localStorage.getItem("pro");
   // alert(chk);  <img src="img/image/p1.png"  alt="" class="conf-lftbtl" /> prodesc
    if(chk==1){ 
        $('#bus').prop('checked', true); $('#car').prop('checked', false); $('#taxi').prop('checked', false); 
        $("#stotal").html("7,999/-"); $("#dtotal").html("-3,7091/-"); $("#total").html("4,290/-");  $("#total_price").val('4290'); 
        $("#proimg").html('<img src="img/image/p6.png"  alt="" class="conf-lftbtl" />');
        $("#prodesc").html("Buy 4 Months Supply of Trickveda Stamina & Enlargemant Capsule <span class=price></span>  <span class=price></span> <span></span>"); 
    }
    else if(chk==2){ 
        $('#bus').prop('checked', false); $('#car').prop('checked', true); $('#taxi').prop('checked', false);
        $("#stotal").html("3,999/-"); $("#dtotal").html("-1,109/-"); $("#total").html("2,890/-"); $("#total_price").val('2890');
        $("#proimg").html('<img src="img/image/p4.png"  alt="" class="conf-lftbtl" />');
        $("#prodesc").html("Buy 2 Months Supply of Trickveda Stamina & Enlargemant Capsule <span class=price></span> <span> </span>"); 
    }
    else if(chk==3){ 
        $('#bus').prop('checked', false); $('#car').prop('checked', false); $('#taxi').prop('checked', true); 
        $("#stotal").html("2,399/-"); $("#dtotal").html("-509/-"); $("#total").html("1,890/-"); $("#total_price").val('1890');
        $("#proimg").html('<img src="img/image/p1.png"  alt="" class="conf-lftbtl" />');
        $("#prodesc").html("Buy 1 Months Supply of Trickveda Stamina & Enlargemant Capsule  <span class=price></span> </span>"); 
    }
}
function checkproduct(chk){
    if(chk==1){ $('#bus').prop('checked', true); $('#car').prop('checked', false); $('#taxi').prop('checked', false); 
    	$("#stotal").html("7,999/-"); $("#dtotal").html("-3,709/-"); $("#total").html("4,290/-");  $("#total_price").val('4290');
    }
    else if(chk==2){ $('#bus').prop('checked', false); $('#car').prop('checked', true); $('#taxi').prop('checked', false); 
	    $("#stotal").html("3,999/-"); $("#dtotal").html("-1,109/-"); $("#total").html("2,890/-"); $("#total_price").val('2890');
    }
    else if(chk==3){ $('#bus').prop('checked', false); $('#car').prop('checked', false); $('#taxi').prop('checked', true); 
    	$("#stotal").html("2,399/-"); $("#dtotal").html("-509/-"); $("#total").html("1,890/-"); $("#total_price").val('1890');
    }
}
function PlaceOrder(){
    //alert(0);
    var pro_code; var total_price=$("#total_price").val();
    var pay_method; var order_id  = window.localStorage.getItem("order_id");
    //input-address-1
    
     var Full_Name = $("#Full_Name").val();
    var input_telephone = $("#input-telephone").val();
    var input_email = $("#input-email").val();
    
    var input_address_1 = $("#input-address-1").val();
    var input_postcode = $("#input-postcode").val();
    var input_city = $("#input-city").val();
    var input_state = $("#input-state").val();
    
    if($('#prepaid').is(':checked')) {pay_method='instamojo';}
    else if($('#cod').is(':checked')) {pay_method='cod'}
    
    if($('#bus').is(':checked')) {pro_code='4 Bottle'}
    else if($('#car').is(':checked')) {pro_code='2 Bottle'}
    else if($('#taxi').is(':checked')) {pro_code='1 Bottle'}
    
    if(pay_method==undefined){alert("Please Select Payment Method")}
    else if(Full_Name.length<3){
        alert("Enter valid full name");
    }else if(input_telephone.length<10){
        alert("Enter valid phone number");
    }else if(input_email.length<8){
        alert("Enter valid email");
    }else if(input_address_1.length<10){
        alert("Enter valid address");
    }else if(input_postcode.length<5){
        alert("Enter valid postal code");
    }else if(input_city.length<3){
        alert("Enter valid city name");
    }else if(input_state.length<2){
        alert("Enter valid state name");
    }else if(pay_method=='cod'){
var pay_link;
$.ajax({
				type : 'post',
				url : 'https://trickveda.in/mbooster/js/server.php',
				data : {'type':'002','Full_Name':Full_Name,'input_telephone':input_telephone,'input_postcode':input_postcode,'input_city':input_city,'input_state':input_state,'pay_method':pay_method, 'order_id':order_id,'pro_code':pro_code, 'total_price':total_price,'input_address_1':input_address_1,'input_email':input_email},
				beforeSend:function(){
				   // $("#confirmorder").prop("disabled", true); 
				    $("#load_status").html("Processing Your Order Please Wait....");
						},
				success : function (res){
				    console.log(res);
			                if(res=='sucess'){
								unhook();
	                    		window.location.href="order-success-tc.html";	
			                }else{
			                     $("#load_status").html("Something Went Wrong Please Try Again Our Contact Our Support");
							     $("#confirmorder").removeAttr('disabled');
								alert("Something Went Wrong Please Try Again Our Contact Our Support");
								console.log(res);
			                }
						

	
						}	
					});

               
    }else{
      /*
        if(pro_code=='241'){//1 bootle taxi
            pay_link ='https://www.instamojo.com/@ownherb/l2647a224c0714528bb683ec403bd1647/'; 
        }else if(pro_code=='243'){
            pay_link ='https://www.instamojo.com/@ownherb/l82948b0ef985445eba124162a7cfec02/'; 
        }else if(pro_code=='245'){
            pay_link ='https://www.instamojo.com/@ownherb/ldd36cd965b3e48ffb67c77ba54c9ee90/'; 
        }
         Instamojo.open(pay_link);
         */
         
         
         		$('.loader').hide(); $("#placeorder-btn").attr("disabled", false); $("#placeorder-error").html("");
 total_price=total_price-500;
 total_price=total_price*100;
 var options = {
    "key": "rzp_live_Ti3Ua2tOMcBiWT",  //453fq2vYb5US7zmr4ONfwUjt
    "amount": total_price, // Example: 2000 paise = INR 20
    "name": "TrickVeda",
    "description": "TrickVeda",
    "image": "https://www.trickveda.in/wp-content/uploads/2021/10/cropped-logoveda-574x536-1.jpeg",// COMPANY LOGO
    "handler": function (response) {
        //console.log(response);
        // AFTER TRANSACTION IS COMPLETE YOU WILL GET THE RESPONSE HERE.
        
        if (typeof response.razorpay_payment_id == 'undefined' ||  response.razorpay_payment_id < 1) {
            //redirect_url = '/you-owe-money.html';
            alert("Payment Failed Please Try Again");
        } else {
          //  redirect_url = '/thnx-you-paid.html';
          alert("Payment Sucessful Please Wait...");
          $.ajax({
					type : 'post',
					url : 'https://trickveda.in/mbooster/js/server.php',
				data : {'type':'002','Full_Name':Full_Name,'input_telephone':input_telephone,'input_postcode':input_postcode,'input_city':input_city,'input_state':input_state,'pay_method':pay_method, 'order_id':order_id,'pro_code':pro_code, 'total_price':total_price,'input_address_1':input_address_1,'input_email':input_email},
					beforeSend:function(){
						 $("#load_status").html("Processing Your Order Please Wait....");
					},
					success : function (res){	
					  console.log(res);
			                if(res=='sucess'){
								unhook();
	                    		window.location.href="order-success-tc.html";	
			                }else{
			                     $("#load_status").html("Something Went Wrong Please Try Again Our Contact Our Support");
							     $("#confirmorder").removeAttr('disabled');
								alert("Something Went Wrong Please Try Again Our Contact Our Support");
								console.log(res);
			                }
					}
				});
        }
        //location.href = redirect_url;
        
        
    },
    "prefill": {
        "name": Full_Name, // pass customer name
        "email": input_email,// customer email
        "contact": input_telephone //customer phone no.
    },
    "notes": {
        "address": input_address_1 //customer address 
    },
    "theme": {
        "color": "#15b8f3" // screen color
    }
};
//console.log(options);
var propay = new Razorpay(options);
propay.open();






			}	
}

function checkpaymentmethod(){
    //alert(0);
    if($('#prepaid').is(':checked')) {pay_method='instamojo'
       
    }
    else if($('#cod').is(':checked')) {pay_method='cod'}
}




     /* insta mojofuck  */
     /*
      function onOpenHandler () {
        //alert('Payments Modal is Opened');
      }

      function onCloseHandler () {
        alert('Payments Aborted Please Try Again');
      }

      function onPaymentSuccessHandler (response) {
        alert('Payment Successful');
        
        
    var pro_code; var total_price=$("#total_price").val();
    var pay_method; var order_id  = window.localStorage.getItem("order_id");
    if($('#prepaid').is(':checked')) {pay_method='instamojo';  total_price=total_price-500; $("#total").html(total_price); }
    else if($('#cod').is(':checked')) {pay_method='cod'}
    
    if($('#bus').is(':checked')) {pro_code='245'}
    else if($('#car').is(':checked')) {pro_code='243'}
    else if($('#taxi').is(':checked')) {pro_code='241'}

$.ajax({
				type : 'post',
				url : 'https://ownherb.com/master/js/server.php',
				data : {'type':'003','pay_method':pay_method, 'order_id':order_id,'pro_code':pro_code, 'total_price':total_price},
				beforeSend:function(){
				  //  $("#confirmorder").prop("disabled", true); 
				    $("#load_status").html("Processing Your Order Please Wait....");
						},
				success : function (res){
				    console.log(res);
			                if(res=='sucess'){
								unhook();
	                    		window.location.href="https://ownherb.com/master/order-success-tc.html";	
			                }else{
			                     $("#load_status").html("Something Went Wrong Please Try Again Our Contact Our Support");
							     $("#confirmorder").removeAttr('disabled');
								alert("Something Went Wrong Please Try Again Our Contact Our Support");
								//console.log(res);
			                }
						

	
						}	
					});
        
        
        
        
        
        console.log('Payment Success Response', response);
      }

      function onPaymentFailureHandler (response) {
        alert('Payment Failure');
        console.log('Payment Failure Response', response);
      }
    */
      /*end of instamojo fuck*/

