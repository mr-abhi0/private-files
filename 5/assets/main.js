function reviewSlider() {
	$('.reviews').bxSlider({
		adaptiveHeight: false,
		swipeThreshold: 40,
		controls: true,
		auto: true,
		pause: 7000,
		autoHover: true,
		slideSelector: '.reviews__item',
		slideMargin: 5,
	})
}

$(document).ready(function () {
	$(".pre_toform").click(function () {
		var destination = $("form").offset().top;
		jQuery("html:not(:animated),body:not(:animated)").animate({
			scrollTop: destination
		}, 1400);
		return false;
	});
});



$(function () {
	$(window).on('load', function () {
		reviewSlider();

	})


})

$(".only_number").on("keydown", function (t) {
	46 == t.keyCode || 8 == t.keyCode || 9 == t.keyCode || 27 == t.keyCode || 187 == t.keyCode || 65 == t.keyCode && !0 === t.ctrlKey || 35 <= t.keyCode && t.keyCode <= 39 || (t.keyCode < 48 || 57 < t.keyCode) && (t.keyCode < 96 || 105 < t.keyCode) && t.preventDefault()
})

$(".inputCover").click(function () {
	$(this).find(".tooltip").css("display", "block")
})