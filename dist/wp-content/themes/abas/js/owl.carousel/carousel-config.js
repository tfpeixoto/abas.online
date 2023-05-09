$(document).ready(function () {
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

if (document.querySelector(".planos-cards__carrossel")) {
  $(".planos-cards__carrossel").owlCarousel({
    items: 3,
    loop: false,
    nav: false,
    dots: false,
    margin: 0,
    mouseDrag: false,
    responsive: {
      0: {
        items: 1,
        stagePadding: 40,
        startPosition: 1,
        dots: true,
      },
      420: {
        items: 1,
        stagePadding: 90,
        startPosition: 1,
        dots: true,
      },
      570: {
        items: 2,
        stagePadding: 40,
        dots: true,
      },
      900: {
        items: 2,
        stagePadding: 100,
        dots: true,
      },
      1024: {
        items: 2,
        stagePadding: 150,
        dots: true,
      },
      1100: {
        items: 3,
        dots: false,
      },
    }
  })
}