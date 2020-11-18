$(document).ready(function () {
  let $forBuyer = $('.js-for-buyer')
  let $forSeller = $('.js-for-seller')

  let pathname = window.location.href
  let type = pathname.substring(pathname.lastIndexOf('/') + 1)
  console.log(type)

  if ($forBuyer) {
    if (type === '#buyer') {
      $forBuyer.attr("checked", "checked")
    }
  }

  if ($forSeller) {
    if (type === '#seller') {
      $forSeller.attr("checked", "checked")
    }
  }
})