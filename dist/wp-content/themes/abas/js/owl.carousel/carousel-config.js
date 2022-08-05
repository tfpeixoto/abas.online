$(document).ready(function() {
  $(".depoimentos__carrossel").owlCarousel({
    items: 1,
    mouseDrag: true,
    loop: true,
    autoplay: true,
    autoplaySpeed: 2000,
    stagePadding: 0,
    margin: 10,
    nav: true,
    dots: true,
    autoHeight: true
  });
})