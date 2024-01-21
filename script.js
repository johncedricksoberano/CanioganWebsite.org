const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnlogin-popup');
const iconclose = document.querySelector('.icon-close');

registerLink.addEventListener('click', () => {
    console.log('Register link clicked');
    wrapper.classList.add('active');
})

loginLink.addEventListener('click', () => {
    console.log('Login link clicked');
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', () => {
    console.log('Popup button clicked');
    wrapper.classList.add('active-popup');
});

iconclose.addEventListener('click', () => {
    console.log('Popup button clicked');
    wrapper.classList.remove('active-popup');
});
