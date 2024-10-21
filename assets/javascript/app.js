
const passwordInput = document.querySelector(`#password_input`);
const showPassword = document.querySelector(`#show_hide`);
const eyeIconWrapper = document.querySelector(`#eye_icon_container`);

passwordInput.addEventListener(`keydown`, () => {
    if(passwordInput.value === ``){
        eyeIconWrapper.style.setProperty(
            `display`,
            `none`
        )
    }
    
    else{
        eyeIconWrapper.style.setProperty(
            `display`,
            `block`
        )
    }; 
});

// window.addEventListener(`DOMContentLoaded`, () =>{
//     if(passwordInput.value === ``){
//         eyeIconWrapper.style.setProperty(
//             `display`,
//             `none`
//         )
//     }
    
//     else{
//         eyeIconWrapper.style.setProperty(
//             `display`,
//             `block`
//         )
//     }; 
// });



showPassword.addEventListener(`click`, () => {
    
    if(passwordInput.type === (`password`)) {
        passwordInput.type = (
            `text`
        );

        showPassword.src = (
            `/assets/svg/eye-svgrepo-com.svg`
        );

    }

    else{
        passwordInput.type = (
            `password`
        );

        showPassword.src = (
            `/assets/svg/eye-off-svgrepo-com.svg`
        );

        
    }
});





