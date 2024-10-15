const html = document.querySelector(`html`)
const body = document.querySelector(`body`);
const hamBurger = document.querySelector(`.hamburger`);
const mobileNavbar = document.querySelector(`.mobile_navbar`);
const checkNav = document.querySelector(`#check_nav`);
const allLinks = document.querySelector('.links');




checkNav.addEventListener(`click`, () => {
	if(checkNav.checked){
		hamBurger.classList.add('is-active');
		mobileNavbar.style.setProperty(
			'transform',
			'translateX(+0)'
		);
		mobileNavbar.style.setProperty(
			'transition',
			'0.6s cubic-bezier(0.23, 1, 0.32, 1)'
		);
	}else {
		hamBurger.classList.remove('is-active');
		mobileNavbar.style.setProperty(
			'transform',
			'translateX(-50vh)'
		);

		mobileNavbar.style.setProperty(
			'transition',
			'1s'
		);
	};

});



document.addEventListener('DOMContentLoaded', () => {
	function jsMediaQueries() {

		if (!window.matchMedia("(max-width: 888px)").matches){
			hamBurger.classList.remove('is-active');
			mobileNavbar.style.setProperty(
				'transform',
				'translateX(-50vh)'
			);

		}else {

		}
	}
	jsMediaQueries();
	window.addEventListener('resize', jsMediaQueries);
});

// window.addEventListener(`load`, () => {
	
	// 	setTimeout(() => {
		// 		document.querySelector(`.preloader_animation`).classList.remove(`show_preloader`)}, 2000);
		// });
		
function loadAnimation() {
	document.querySelector(`.preloader_animation`).classList.add(`show_preloader`);
		setTimeout(() => {
			document.querySelector(`.preloader_animation`).classList.remove(`show_preloader`)}, 3000);

}
window.addEventListener(`DOMContentLoaded`, loadAnimation);



document.querySelectorAll(`.links`).forEach((link_s) => { 
	link_s.addEventListener(`click`, (anchor) => {

		anchor.preventDefault();

		hamBurger.classList.remove('is-active');
		mobileNavbar.style.setProperty(
			'transform',
			'translateX(-50vh)'
		);
		mobileNavbar.style.setProperty(
			'transition',
			'2s'
		);

		window.addEventListener(`DOMContentLoaded`, loadAnimation);
		const thisHref = link_s.getAttribute(`href`);
		// document.querySelector(`.preloader_animation`).classList.add(`show_preloader`);
		
		setTimeout(() => {
			window.removeEventListener(`DOMContentLoaded`, loadAnimation);
			// document.querySelector(`.preloader_animation`).classList.remove(`show_preloader`);
			window.location.href = thisHref;

		});

	});

});








// ELEMENTS SLIDE-IN ANIMATION //
const items = document.querySelectorAll(`#move_in`);
window.addEventListener(`scroll`, startAnimation);

    function startAnimation() {
		const trigger = (window.innerHeight / 4.6 * 4);
		items.forEach(box => {
		const boxTop = box.getBoundingClientRect().top;

			if(boxTop < trigger - 100){
				box.classList.add(`visible`);
			}
			else{
				box.classList.remove(`visible`)
			}
    })};










let prevWindowWidth = window.innerWidth;  // Track the previous window width

function initSwiper() {
  var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
	scrollX: true,
	scrollY: false,
    mousewheel: false,  // Disable mousewheel scrolling on the main slider
    pagination: {
      el: `.blog-slider__pagination`,
      clickable: true,
	  
    }
	
  });

  // Add a separate mousewheel event listener only to the pagination element
  const paginationEl = document.querySelector('.swiper-pagination-bullets');
  paginationEl.addEventListener('', function(e) {
    e.preventDefault(); // Prevent default scrolling behavior

    // Determine the direction of scroll and navigate the slider accordingly
    if (e.deltaX > 3) {
      swiper.slideNext(); // Scroll down to next slide
    } else {
      swiper.slidePrev(); // Scroll up to previous slide
    }
  });
}
// Initialize the Swiper on page load 
initSwiper();






document.addEventListener('contextmenu', (event) => event.preventDefault());
// document.onkeydown = function(e) {
//     // Disable F12, Ctrl+Shift+I (Inspector), Ctrl+Shift+J (Console), Ctrl+U (View Source)
//     if (e.keyCode == 123 || // F12
//         (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) || // Ctrl+Shift+I
//         (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) || // Ctrl+Shift+J
//         (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))) { // Ctrl+U
//         return false; // Prevent the event
//     }
// };
