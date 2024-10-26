// counter section stArt

let count = []

let value = document.querySelectorAll('.number')

let interval = 67

count[count.lenght] = value

console.log(value)

value.forEach((value) => {

  let startValue = 0
  let endValue = parseInt(value.getAttribute('data-val'))
  
  let duration = Math.floor(interval / endValue)
  let count = setInterval(function () {


    startValue += 1
    value.textContent = startValue
    if (startValue == endValue) {
      clearInterval(count)
    }
  }, 5)
})




// select the hamburgerMenu button

  const hamburgerButton = document.querySelector('.button')

  const menu = document.querySelector('.burger-parent')

  // add eventlistener to the hamburger menu button

  hamburgerButton.addEventListener('click', () =>{
    menu.classList.toggle('open')
    hamburgerButton.classList.toggle('close')
  })


  // arrowDiv section stArt


  var arrow = document.querySelector('.arrowDiv')

  window.addEventListener('scroll', () => {

    if (window.scrollY > 1500) {
      arrow.style.display = 'block'
    } else {
      if (window.scrollY <= 100) {
        arrow.style.display = 'none'

      }
    }
  })

  arrow.addEventListener('click', () => {

    window.scrollTo({
      top: 0,
      behavior: 'smooth'
  })
})

