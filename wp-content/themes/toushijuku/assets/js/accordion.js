// window.addEventListener('load', (e) => {
//   const faqQuestions = document.querySelectorAll('.js-faq-question')

//   faqQuestions.forEach(function(e){
//     e.addEventListener('click', function(el){
//       el.preventDefault()
//       let faqQuestion = el.currentTarget.parentNode
//       let faqContent = el.currentTarget.nextElementSibling
//       let height = faqContent.children[0].offsetHeight

//       faqQuestion.classList.toggle('is-open')
      

//       if(!faqQuestion.classList.contains('is-open')) {
//         faqContent.removeAttribute('style')
//       } else {
//         faqContent.style.height = height +'px'
//       }

//     })
//   })
// })

$(document).ready(function () {
  const faqTrigger = $('.js-faq-question')

  faqTrigger.click(function(){
    $(this).parent().toggleClass('is-open')
    $(this).siblings('.faq-question-content').slideToggle(300)
    $(this).siblings('.faq-question-icon').toggleClass('is-open')
  })
})
