jQuery.noConflict();
(function( $ ) {
  $(function() {
    $('.slider_un').slick({
    dots: true,
    infinite: false,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: false,
    });

    $('.slider_deux').slick({
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: true,
    });



  });

})(jQuery);
