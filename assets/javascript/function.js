const body = document.querySelector(`body`);
const hamBurger = document.querySelector(`#hamburger`);
const mobileNavbar = document.querySelector(`.mobile_navbar`);
const checkNav = document.querySelector(`#check_nav`);

checkNav.addEventListener(`click`, () => {
	if(checkNav.checked){
		mobileNavbar.style.setProperty(
			'transform',
			'translateX(+0)'
		);
		mobileNavbar.style.setProperty(
			'transition',
			'0.6s cubic-bezier(0.23, 1, 0.32, 1)'
		);
	}else {
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

document.querySelectorAll(`.links`).forEach((link_s) => {
	link_s.addEventListener(`click`, (anchor) => {
		anchor.preventDefault();
		const thisHref = link_s.getAttribute(`href`);
		document.querySelector(`.preloader_animation`).classList.add(`show_preloader`);

		setTimeout(() => {
			document.querySelector(`.preloader_animation`).classList.remove(`show_preloader`);
			window.location.href = thisHref;}, 3000);
		});
});



let prevWindowWidth = window.innerWidth;  // Track the previous window width

function initSwiper() {
  var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: false,
    mousewheel: false,  // Disable mousewheel scrolling on the main slider
    pagination: {
      el: '.blog-slider__pagination',
      clickable: true,
    }
  });

  // Add a separate mousewheel event listener only to the pagination element
  const paginationEl = document.querySelector('.blog-slider__pagination');
  paginationEl.addEventListener('wheel', function(e) {
    e.preventDefault(); // Prevent default scrolling behavior

    // Determine the direction of scroll and navigate the slider accordingly
    if (e.deltaY > 0) {
      swiper.slideNext(); // Scroll down to next slide
    } else {
      swiper.slidePrev(); // Scroll up to previous slide
    }
  });
}
// Initialize the Swiper on page load
initSwiper();


// Add an event listener to handle window resize
window.addEventListener('resize', function() {
  const currentWindowWidth = window.innerWidth;

  // Check if the screen size crossed the 888px threshold
  if ((prevWindowWidth > 888 && currentWindowWidth <= 888) || (prevWindowWidth <= 888 && currentWindowWidth > 888)) {
    location.reload();  // Reload the page when resizing crosses 888px
  }

  // Update the previous window width for the next resize event
  prevWindowWidth = currentWindowWidth;
});
