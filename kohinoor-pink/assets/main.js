var app = {};
app.winWidth = window.innerWidth;
app.selector = '.reviews-slider'
app.adaptiv = 991;
app.mobile = {
  minSlides: 1,
  maxSlides: 1,
  adaptiveHeight: true,
  infiniteLoop: true
}
if(app.winWidth>app.adaptiv){
	app.iden = 0;	
}else{
	app.iden = 1;
}

$(document).ready(function() {
		app.slideBuffer = $(app.selector).html();
	// scroll to form

	//FlipClock
	//var clock = $('.clock').FlipClock(47623, {
	//	countdown: true
	//});

	//Copy text for Titles in wap version

	$('.grid-title-wap').append($('.grid-title').clone());

	$('.natural__cell-title-1').append($('.natural__cell__title_1').html());

	$('.natural__cell-title-2').append($('.natural__cell__title_2').html());

	$('.natural__cell-title-3').append($('.natural__cell__title_3').html());

	$('.natural__cell-title-4').append($('.natural__cell__title_4').html());
	
	$('.pre_toform').click(function(){
			$("html, body").animate({scrollTop: $("#order_form").offset().top-300}, 1000);
			return false;
		});


});


$(window).load(function(){
	if(app.iden) app.slide = $('.review-block').bxSlider(app.mobile);
});

$(window).resize(function() {
	app.winWidth = window.innerWidth;


	if(app.winWidth>app.adaptiv && app.iden){
		app.slide.destroySlider();
		$(app.selector).html(app.slideBuffer);
		app.iden = 0;
	}else if(app.winWidth<=app.adaptiv && !app.iden){
		app.slide = $('.review-block').bxSlider(app.mobile);
		app.iden = 1;
	}
});