	// Hamburger menu section stArt



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

		if (window.scrollY > 5000) {
			arrow.style.display = 'block'
		} else {
			if (window.scrollY <= 2000) {
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



	// request form section stArt


	let user = []

	function send() {

		let email = document.getElementById
	}