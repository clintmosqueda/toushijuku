$(document).ready(function () {
  let $buyer = $('.js-buyer')
  let $seller = $('.js-seller')
  let $forBuyer = $('.js-for-buyer')
  let $forSeller = $('.js-for-seller')
  let $catergoryLabel = $('.js-category-label')
  let sellerUrl = $(location).attr('href')
  let partUrl = sellerUrl.split('/')
  let urlElement = partUrl[partUrl.length - 2]

  if ($buyer) {
    $buyer.click(function () {
      $('.concept-button').removeClass('is-active')
      $(this).addClass('is-active')
      $forBuyer.addClass('is-active')
      $forSeller.removeClass('is-active')
    })
  }

  if ($seller) {
    $seller.click(function () {
      $('.concept-button').removeClass('is-active')
      $(this).addClass('is-active')
      $forBuyer.removeClass('is-active')
      $forSeller.addClass('is-active')
    })
  }

  if (urlElement === 'to-seller') {
    $forSeller.attr('checked', true)
  }

  if ($catergoryLabel){
    $catergoryLabel.click(function() {
      $(this).parent('.classification-category-item').toggleClass('is-active')
    })
    // $catergoryLabel.click().next('ul').slideToggle()
  }



})