$('a[href^="#"]').click(function(e) {
  e.preventDefault();
  var target = this.hash,
    $target = $(target);
  $('html, body').stop().animate({
    scrollTop: $target.offset().top
  }, 600);
});
