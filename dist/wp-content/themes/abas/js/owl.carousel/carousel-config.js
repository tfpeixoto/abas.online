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

if (document.querySelector(".planos")) {
  $(".planos").owlCarousel({
    loop: true,
    nav: true,
    nav: true,
    responsive: {
      0: {
        items: 1,
        autoHeight: true
      },
      768: {
        items: 2
      },
      1024: {
        items: 3
      }
    }
  })
}