document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


const ronKnop = document.getElementById('ronButton');

if (ronKnop) {
    const ronContent = document.getElementsByClassName('content__opener--about')[0];
    ronKnop.addEventListener('click', function(){
        ronContent.classList.toggle('content__opener--show');
        ronKnop.classList.toggle('content__opener-minus');
    })
}

const menuBurger = document.getElementsByClassName('header__nav--hamburger')[0];
const menu = document.querySelectorAll('.header__nav ul')[0];
menuBurger.addEventListener('click', function()  {
    menu.classList.toggle('header__nav--show');
    console.log(menu);
});

const popup = document.getElementsByClassName('popup')[0];
const closePopup = document.getElementsByClassName('popup__close')[0];
const popupBtn = document.getElementsByClassName('popup__button')[0];
const popupForm = document.getElementsByClassName('popup__form')[0];
const closeForm = document.getElementsByClassName('popup__form--block-close')[0];
const popupLeft = document.getElementsByClassName('popup__left')[0];
const popupRight = document.getElementsByClassName('popup__right')[0];
    
const hidePopup = sessionStorage.getItem('hidePopup') || false;
let popupCounter = localStorage.getItem('countPopup') || 0;

const counterFunction = () => {
    if (!hidePopup){
        if (popupCounter >= 10) {
            popup.classList.add('popup--show');
            clearInterval(countForPopup)
        } else {
            popupCounter++;
            localStorage.setItem('countPopup', popupCounter);
        }
    } else {
        clearInterval(countForPopup);
    }
}

const countForPopup = setInterval(counterFunction, 1000);

closePopup.addEventListener("click", function(){
    popup.classList.remove('popup--show');
    sessionStorage.setItem('hidePopup', true);
});

popupBtn.addEventListener("click", function(){
    popupForm.classList.add('popup__form--show');
    popup.classList.add('popup__grow');
    popupLeft.classList.add('popup__hide');
    popupRight.classList.add('popup__hide');
})

// closeForm.addEventListener("click", function(){
//     popupForm.classList.remove('popup__form--show');
// })

document.addEventListener( 'wpcf7mailsent', function( event ) {
   const responseSend = document.getElementsByClassName('wpcf7-response-output')[0];
   responseSend.scrollIntoView({
       behavior: 'smooth',
       block: 'start'
   });
}, false );

const slidingBanner = document.getElementsByClassName('content__banner--img')[0];

if (slidingBanner){
    const onScrollLazy = () => {
        slidingBanner.classList.add('content__banner--img-show');
    }
    window.onscroll = function() {onScrollLazy()};
}
