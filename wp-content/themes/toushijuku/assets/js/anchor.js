$(document).ready(function () {
  let $bannerScroll = $('.js-banner-scroll')
  let $conceptSection = $('.js-concept');

  if ($bannerScroll) {
    $bannerScroll.on('click', (e) => {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $conceptSection.offset().top
      }, 1000);
    });
  }
})