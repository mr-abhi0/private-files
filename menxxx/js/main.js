$(document).ready(function () {

    var $timer = $('.js-timer'),
        $timerHtml = $('#js-timer-html').html(),
        $currentTime = $.now(),
        timerCount = 4000,
        $deadline = timerCount;


    if (localStorage.timer > 0) {
        var $usedTime = ($currentTime - localStorage.timer) / 1000;
        $deadline = timerCount - $usedTime;

        if ($deadline <= 0) {
            localStorage.timer = 0;
            $deadline = timerCount;
        }
    } else {
        localStorage.timer = $currentTime;
    }

    $timer.countdown({
        until: +$deadline,
        layout: $timerHtml
    });

});
var app = {};
app.winWidth = window.innerWidth;
app.selector = '.review-block';
app.adaptiv = 991;
app.mobile = {
    minSlides: 1,
    maxSlides: 1,
    adaptiveHeight: true,
    infiniteLoop: true
}
if (app.winWidth > app.adaptiv) {
    app.iden = 0;
} else {
    app.iden = 1;
}

$(document).ready(function () {
    app.slideBuffer = $(app.selector).html();
    app.slideBuffer2 = $(app.selector2).html();
});


$(window).load(function () {
    if (app.iden) app.slide = $('.review').bxSlider(app.mobile);
});

$(window).resize(function () {
    app.winWidth = window.innerWidth;

    if (app.winWidth > app.adaptiv && app.iden) {
        app.slide.destroySlider();
        app.iden = 0;


    } else if (app.winWidth <= app.adaptiv && !app.iden) {
        app.slide = $('.review').bxSlider(app.mobile);
        app.iden = 1;

    }
});
$(document).ready(function() {
    $('.toform').click(function(){
        $("html, body").animate({scrollTop: $("form").offset().top-300}, 1000);
        return false;
    });
});
