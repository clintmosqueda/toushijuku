$(document).ready(function(){
  let $navLink = $('.js-nav-link')
  let $submenu = $('.js-submenu')
  let $submenuBlock = $('.js-submenu-block')
  let $submenuGroup = $('.js-submenu-group')
  let $headerMenu = $('.js-header-menu')
  let $nav = $('.js-nav')
  let $warp = $('.js-wrap')
  let $navicon = $('.js-nav-icon')
  let $footerLinkicon = $('.footer-link-icon')

  $navLink.each(function(){
    let $this = $(this)
    let $submenuHeight = $submenuBlock.height()
    
    $this.mouseenter(function(){
      let dataNavAttr = $this.data('nav')
      if(dataNavAttr) {
        $submenu.height($submenuHeight)
        $submenuGroup.removeClass('is-active')
        $('.js-submenu-group[data-submenu = '+dataNavAttr+']').addClass('is-active')
      } else {
        $submenu.removeAttr("style")
      }
    })
  })

  $submenu.mouseleave(function(){
    $(this).removeAttr("style")
  })

  $headerMenu.click(function(){
    $(this).toggleClass('is-active')
    $nav.toggleClass('is-active')
    $warp.toggleClass('is-active')
  })

  $navicon.click(function() {
    console.log('test')
    $(this).parents('.nav-item').toggleClass('is-active')
  })

  $footerLinkicon.click(function() {
    $(this).parent('.footer-link-group').toggleClass('is-active')
  })

})