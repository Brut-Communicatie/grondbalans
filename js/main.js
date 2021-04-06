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

const slidingBanner = document.getElementsByClassName('content__banner--img')[0];

if (slidingBanner){
    const onScrollLazy = () => {
        slidingBanner.classList.add('content__banner--img-show');
    }
    window.onscroll = function() {onScrollLazy()};
}