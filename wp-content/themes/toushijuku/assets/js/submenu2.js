window.addEventListener('load', (e) => {
  const navLink = document.querySelectorAll('.js-nav-link')
  const submenu = document.querySelector('.js-submenu')
  const submenuBlock = document.querySelector('.js-submenu-block')
  const submenuGroup = document.querySelectorAll('.js-submenu-group')

  navLink.forEach(function(e){
    e.addEventListener('mouseenter', function(el){
      let submenuHeight = submenuBlock.offsetHeight
      let dataAttr = el.currentTarget.getAttribute('data-nav')
      let submenuGroupAttr = document.querySelector(`[data-submenu='${dataAttr}']`)
      if(dataAttr) {

        if(submenuGroupAttr) {
          submenuGroupAttr.classList.add('is-active')
        } else {

        }
        submenu.style.height = submenuHeight+'px'
      } else {
        submenu.removeAttribute('style')
        submenuGroupAttr.classList.remove('is-active')
      }
    })
  })

  submenu.addEventListener('mouseleave', function(e){
    this.removeAttribute('style')

    submenuGroup.forEach(function(index, el){
      if(this.classList.contains('is-active')) {
        this.classList.remove('is-active')
      }
    })

  })
})