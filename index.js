$(".navbar-burger").click(function() {
  $("#navbarMenuHeroA, .navbar-burger").toggleClass("is-active");
});

$(".navbar-item").click(function() {
  var href = $(this).attr("href");
  $("html, body").animate(
    {
      scrollTop: $(href).offset().top
    },
    800
  );
  $("#navbarMenuHeroA, .navbar-burger").toggleClass("is-active");
});