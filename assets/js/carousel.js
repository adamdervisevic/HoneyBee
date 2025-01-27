// 1505

$(document).on("keydown", function (e) {
  if (e.keyCode === 37 || e.keyCode === 39) {
    e.preventDefault();
  }
});

$(document).ready(function () {
  $(".teacher_carousel").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow:
      '<button class="slick-prev" aria-label="Scroll Left""><ion-icon name="chevron-back-outline"></ion-icon></button>',
    nextArrow:
      '<button class="slick-next" aria-label="Scroll right""><ion-icon name="chevron-forward-outline"></ion-icon></button>',
    pauseOnHover: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 750,
        settings: {
          slidesToShow: 1,
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
