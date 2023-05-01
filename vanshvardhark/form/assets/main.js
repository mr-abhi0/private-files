var toForm = function () {
  $(".pre_toform").click(function (e) {
    e.preventDefault();
    var a = $(".js_submit");
    var b = a.closest("form");
    if ($("form#order_form").length) {
      a = $("#order_form .js_submit");
      b = a.closest("form#order_form");
    }
    if (b.length && a.is(":visible")) {
      $("html,body").animate({ scrollTop: b.last().offset().top }, 1000);
    }
    return false;
  });
};
$(function () {
  toForm();
});
$(document).ready(function () {
  function changeSelectPack(TT) {
    TT.closest(".offer-block__item")
      .addClass("on")
      .siblings()
      .removeClass("on");
  }
  $("label.custom-radio-button").on("touchend, click", function () {
    var TT = $(this);
    changeSelectPack(TT);
    if (TT.attr("data-package-id") != 7) {
      $("html, body").animate(
        { scrollTop: $("#order_form").offset().top + 300 },
        300
      );
    }
  });
  $(".custom-radio-button").click(function () {
    var package_id = $(this).data("package-id");
    $('.change-package-selector2 [value="' + package_id + '"]').prop(
      "selected",
      true
    );
  });
  $("select.change-package-selector2").on("change", function () {
    changeSelectPack(
      $("label.custom-radio-button[data-package-id=" + this.value + "]")
    );
  });
  $("label.custom-radio-button").on("touchend, click", function () {
    var package_id = $(this).data("package-id");
    $('.change-package-selector2 [value="' + package_id + '"]').prop(
      "selected",
      true
    );
    set_package_prices(package_id);
  });
  $(".change-package-selector2").on("change", function () {
    var package_id = $(this).val();
    set_package_prices(package_id);
  });
});
