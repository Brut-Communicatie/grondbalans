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


setTimeout(() => {
    popup.classList.add('popup--show');

}, 1000);

closePopup.addEventListener("click", function(){
    popup.classList.remove('popup--show');
})

popupBtn.addEventListener("click", function(){
    popup.classList.remove('popup--show');
    popupForm.classList.add('popup__form--show');
})

closeForm.addEventListener("click", function(){
    popupForm.classList.remove('popup__form--show');
})