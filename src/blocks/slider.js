(function ($) {
  class SlickCarousel {
    constructor() {
      this.initCarousel();
    }
    initCarousel() {
      $(document).ready(function () {
        $(".your-class").slick({
          autoplay: true,
          autoplaySpeed: 3000,
          dots: true,
          // fade: true,
          cssEase: "linear",
        });
      });
    }
  }
  new SlickCarousel();
})(jQuery);
