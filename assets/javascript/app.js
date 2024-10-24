
const signUpform = document.getElementById(`signup_form`);
let termsAndConditions_Label;
let mainCheckboxDesign;
let hiddenCheckbox;

    termsAndConditions_Label = document.querySelector(`#terms-conditions_label`);
    mainCheckboxDesign = document.querySelector(`#cbx-15`);
    hiddenCheckbox = document.querySelector(`#hidden_cbx`);

termsAndConditions_Label.addEventListener(`click`, () => {
    hiddenCheckbox.checked = !hiddenCheckbox.checked;
});
hiddenCheckbox.addEventListener(`click`, () => {
    mainCheckboxDesign.checked = !mainCheckboxDesign.checked;
    
});

signUpform.addEventListener(`submit`, (form_event) => {

    const lengthRegex = /^.{12,}$/;
    const uppercaseRegex = /[A-Z]/; 
    const lowercaseRegex = /[a-z]/;
    const numberRegex = /[0-9]/;
    const specialCharRegex = /[!@#$%^&*(),.?":{}|<>]/;
    const forbiddenSequencesRegex = /(123|abc|password|qwerty|letmein)/i;
    // //////////
    const emailRegex = /(gmail.com|yahoo.com|onmail.com|outlook.com|yahoo.co.uk)/i
    // /////////
    const MainErrorMessage = document.querySelector(`.error_message`);
    const emailInput = document.querySelector(`#email_input`).value;
    const phoneInput = document.querySelector(`#phone_input`).value;
    const passwordInput = document.querySelector(`#password_input`).value;
    const conformPasswordInput = document.querySelector(`#confirm_password_input`).value;
    // //////////
    hiddenCheckbox = document.querySelector(`#hidden_cbx`);
    // //////////
    const preloaderAnimation = document.querySelector(`.preloader_animation`)


    


    MainErrorMessage.style.opacity = `1`;


    if(emailInput === ``){
        MainErrorMessage.textContent = `Email is required`;
        form_event.preventDefault();
    }
    else if(!emailRegex.test(emailInput)) {
        MainErrorMessage.textContent = `Invalid Email format!`;
        form_event.preventDefault();
    }
    else if (passwordInput === ``) {
        MainErrorMessage.textContent = `Password is required`;
        form_event.preventDefault();
    }
    else if(!lengthRegex.test(passwordInput)) {
        MainErrorMessage.textContent = `Password must be at least 12 characters long.`;
        form_event.preventDefault();
    }
    else if(!uppercaseRegex.test(passwordInput)) {
        MainErrorMessage.textContent = `Password must contain at least one uppercase letter.`;
        form_event.preventDefault();
    }
    else if(!lowercaseRegex.test(passwordInput)) {
        MainErrorMessage.textContent = `Password must contain at least one lowercase letter.`;
        form_event.preventDefault();
    }

    else if(!numberRegex.test(passwordInput)) {
        MainErrorMessage.textContent = `Password must contain at least one number.`;
        form_event.preventDefault();
    }
    else if(!specialCharRegex.test(passwordInput)) {
        MainErrorMessage.textContent = `Password must contain at least one special character.`;
        form_event.preventDefault();
    }
    else if(forbiddenSequencesRegex.test(passwordInput)) {
        MainErrorMessage.textContent = `Password cannot contain common sequences like "123", "abc", "password", etc.`;
        form_event.preventDefault();
    }
    else if(conformPasswordInput === ``) {
        MainErrorMessage.textContent = `Re-enter your password`;
        form_event.preventDefault();
    }
    else if(conformPasswordInput !== passwordInput) {
        MainErrorMessage.textContent = `Passwords do not match`;
        form_event.preventDefault();
    }
    else if (!hiddenCheckbox.checked){
        MainErrorMessage.textContent = `You must agree to the terms and conditions`;
        form_event.preventDefault();
    } 
    else {
        preloaderAnimation.classList.add(`show_preloader`);
    
        setTimeout(() => {
            preloaderAnimation.classList.remove(`show_preloader`);
            window.location.href = thisHref;
        }, 6000);
        form_event.preventDefault();

        setTimeout(() => {
            location.href = `login.html`;
        },4000);
    }


});

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







