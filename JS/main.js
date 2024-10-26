	 $(document).ready(function(){
	 $(".owl-carousel").owlCarousel();
	});


	var owl = $('.owl-carousel');
	owl.owlCarousel({
    items:1,
    loop:true,
    // margin:10,
    autoplay:true,
    autoplayTimeout:10000,
    autoplayHoverPause:true
	});


	$('.next').on('click',function(){
    owl.trigger('next.owl.carousel',[1000])
	})
	$('.previous').on('click',function(){
    owl.trigger('prev.owl.carousel', [1000])
	})


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

		if (window.scrollY > 3000) {
			arrow.style.display = 'block'
		} else {
			if (window.scrollY <= 1000) {
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



// SEARCH-MENU SECTION stART



		// select the search button
     var dropdown = document.getElementById('content')

     var special = document.getElementById('special')

     special.addEventListener('click', drop)

     function drop(){
     	if(dropdown.style.display == 'block'){

     		document.getElementById('content').style.display = 'none'

     	}
     	else{

     		document.getElementById('content').style.display = 'block'
     	}
     }



     // testimonial section stArt


	     $('.owl-carousel').owlCarousel({
	    items: 1,
	    loop:false,
	    // margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:3
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:3
	        }
	    }

	})



