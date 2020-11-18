window.addEventListener('load', (e) => {
  const lazyload = document.querySelectorAll('.js-lazyload')

  let lazyloadSettings = {
    rootMargin: '0px 0px 0px 0px'
  }

  let lazyloadObserver = new IntersectionObserver(lazyloadCallBack, lazyloadSettings)

  lazyload.forEach( image => {
    lazyloadObserver.observe(image)
  })

  function lazyloadCallBack(images){
    images.forEach( image => {
      if(image.isIntersecting) {
        let attr = image.target.getAttribute('data-image')
        image.target.style.backgroundImage = `url(${attr})`
      }
    })
  }
})