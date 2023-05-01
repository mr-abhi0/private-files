// Tooltips
$("#input-name").focus(function() {
  $('#tool-name').css('display', 'block')
})
$("#input-phone").focus(function() {
  $('#tool-phone').css('display', 'block')
});
$("#input-name2").focus(function() {
  $('#tool-name2').css('display', 'block')
})
$("#input-phone2").focus(function() {
  $('#tool-phone2').css('display', 'block')
});
// Only phone
$(".only_phone").on("keydown", function(t) {
  46 == t.keyCode || 8 == t.keyCode || 9 == t.keyCode || 27 == t.keyCode || 187 == t.keyCode || 65 == t.keyCode && !0 === t.ctrlKey || 35 <= t.keyCode && t.keyCode <= 39 || (t.keyCode < 48 || 57 < t.keyCode) && (t.keyCode < 96 || 105 < t.keyCode) && t.preventDefault()
});
