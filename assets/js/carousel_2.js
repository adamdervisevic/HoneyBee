$(document).ready(function () {
  $(".testimonial_carousel").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow:
      '<button class="slick-prev teacher-prev" aria-label="Scroll Left" style="left: 0;"><ion-icon name="chevron-back-outline"></ion-icon></button>',
    nextArrow:
      '<button class="slick-next teacher-next" aria-label="Scroll right" style="right: 0;"><ion-icon name="chevron-forward-outline"></ion-icon></button>',
    pauseOnHover: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
  $(document).on("keydown", function (e) {
    if (e.keyCode === 37 || e.keyCode === 39) {
      e.preventDefault();
    }
  });
});
