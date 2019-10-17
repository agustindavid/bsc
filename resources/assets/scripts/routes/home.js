export default {
  init() {
    $('.featured-products-slider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      rows: 0,
      slidesToShow: 4,
      slidesToScroll: 4,
      prevArrow:'<a class="arrow-prev slick-arrow"><span><</span></a>',
      nextArrow:'<a class="arrow-next slick-arrow"><span>></span></a>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
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

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
