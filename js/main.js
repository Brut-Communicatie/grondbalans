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
        console.log('hallo');

        ronContent.classList.toggle('content__opener--show');
    })
}
