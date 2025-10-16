$(document).ready(function () {
  $(".nav-open").on("click", function () {
    $(".nav-bar").toggleClass("active");
  }),
    $(".drop-down").on("click", function () {
      $(".drop-down-cont").toggleClass("active");
    }),
    $(document).on("click", function (o) {
      0 == $(o.target).closest(".drop-down").length &&
        $(".drop-down-cont").hasClass("active") &&
        0 == $(o.target).closest(".nav-open").length &&
        $(".drop-down-cont").toggleClass("active");
    });
});
