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

    


    var scrollbuttn = document.getElementById("topBtn");

        window.onscroll = function() { scrollFunction()};


        function scrollFunction() {
        if (document.documentElement.scrollTop > 20000 || document.documentElement.scrollTop > 20) {
            scrollbuttn.style.display = "block";
        } 
        else {
            scrollbuttn.style.display = "none";
        }
        }

        scrollbuttn.addEventListener('click', scrollup)

        function scrollup(){
        document.documentElement.scrollTop = 0
        }