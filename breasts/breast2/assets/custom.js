jQuery(document).ready(function(){
//faq
jQuery( '.row-faq' ).click(function() {
jQuery(this).children('.box-answore').slideToggle().toggleClass( "activefaq" );

});
jQuery(".row-faq").click(function(){
   jQuery(this).children('.question-faq').toggleClass("active-icon-w");
});


//equal height on location boxes widget
function resize_height(){
	var wid = jQuery(window).width();
	var maxHeight2 = 0;
	if(wid>640){
		setTimeout(function(){ 
		jQuery('.bx_location').each(function(){
			var xy = jQuery(this).children('.header_wdg').outerHeight(true);
			var xyz = jQuery(this).children('.location_name').outerHeight(true);
			var xh = jQuery(this).children('.content_address').outerHeight(true);
			var z = xy + xyz + xh;
			//var z = jQuery(this).outerHeight(true);
			//var z = jQuery(this).height();
		   maxHeight2 = z > maxHeight2 ? z : maxHeight2;
		   //console.log(xy+'-'+xyz+'-'+z);
		   //console.log(z);
		});
		jQuery('.bx_location').css('height', maxHeight2);
		}, 400);
	}
	
}
jQuery(window).on("load resize",function(e){
	resize_height();
});

//equal height on location boxes widget

//go to id animation
jQuery(function() {
  jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
 if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top - 60
        }, 1000);
		jQuery('.click_open_menu').removeClass('menu_opened');
		jQuery('.menu_area').removeClass('menu_shows');
        return false;
      }
    }
  });
});

//go to id animation

//click to open menu responsive
jQuery('body').on('click', '.click_open_menu', function() {
	var date_clicked = jQuery(this);
	if(jQuery('.menu_area').hasClass('menu_shows')){
		jQuery(this).removeClass('menu_opened');
		jQuery('.menu_area').removeClass('menu_shows');
		
	}else{		
		jQuery(this).addClass('menu_opened');
		jQuery('.menu_area').addClass('menu_shows');
	}
});

//click to open menu responsive



///add class on scroll
jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 100) {
        jQuery(".fixed_head").show();
    } else {
        jQuery(".fixed_head ").hide();
    }
});
///add class on scroll
	
});