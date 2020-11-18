$(document).ready(function () {
  let $modalTrigger = $('.js-modal-trigger')
  let $modal = $('.js-modal')
  let $modalClose = $('.js-modal-close')
  let $wrap = $('.js-wrap')

  if ($modalTrigger) {
    $modalTrigger.click(function () {
      console.log('adasd')
      $modal.addClass('is-active')
      // $wrap.addClass('is-active')
    })
  }

  if ($modalClose) {
    $modalClose.click(function () {
      $modal.removeClass('is-active')
      // $wrap.removeClass('is-active')
    })
  }

})