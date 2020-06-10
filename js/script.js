
let counter = 1;
let slider = document.querySelector('.slider');
let slides = document.querySelectorAll('.slide-item');
let slideWidth = slides[0].clientWidth;
const prev = document.querySelector('.arrow-left');
const next = document.querySelector('.arrow-right');

slider.style.transform = 'translateX(' + (-slideWidth * counter) + 'px)';

let autoSliding = 8000;

function autoSlide () {

    setInterval(slideToRight, autoSliding);
    transitionEnd();
}


function slideToRight () {
    autoSlide = 0;

    if (counter >= 4) return;

    counter++;
    slider.style.transition = 'transform .6s ease-in-out';
    slider.style.transform = 'translateX(' + (-slideWidth * counter) + 'px)';
    console.log(counter);
}

function slideToLeft () {
    autoSlide = 0;

    if (counter <= 0) return;

    counter--;
    slider.style.transition = 'transform .6s ease-in-out';
    slider.style.transform = 'translateX(' + (-slideWidth * counter) + 'px)';
    console.log(counter);
}

function transitionEnd () {

    if (slides[counter].classList.contains('clone-item-first')) {
        
        counter = 1;
        slider.style.transition = 'none';
        slider.style.transform = 'translateX(' + (-slideWidth * counter) + 'px)';

    } else if (slides[counter].classList.contains('clone-item-last')) {

        counter = 3;
        slider.style.transition = 'none';
        slider.style.transform = 'translateX(' + (-slideWidth * counter) + 'px)';
    }
}

function makeScrollToTopBtnVisible () {

    const scroll = document.body.scrollTop || document.documentElement.scrollTop;
    const scrollToTop = document.querySelector('#scrollToTop');
    const header = document.querySelector('.main-header');
    const link = document.querySelectorAll('.navbar-nav > a.nav-item');

    if (scroll > 985) {

        scrollToTop.style.opacity = 1;
        scrollToTop.style.visibility = 'visible';
        
        header.style.position = 'fixed';
        header.style.borderBottom = '0';
        header.style.height = '80px';
        header.style.background = '#fff';
        header.style.boxShadow = '0 0 30px 0 rgba(0, 0, 0, 0.05)';
        document.querySelector('.custom').style.color = '#000';
        document.querySelector('.custom').style.borderColor = '#000';
    

        document.querySelector('.navbar-brand').style.color = '#000';
        
        link.forEach(function(item){
            
            item.classList.add('text-custom');
        })

    } else {

        scrollToTop.style.opacity = 0;
        scrollToTop.style.visibility = 'hidden';
        header.style.position = 'absolute';
        header.style.borderBottom = '1px solid #cccc';
        header.style.height = '90px';
        header.style.background = 'transparent';
        document.querySelector('.navbar-brand').style.color = '#fff';
        document.querySelector('.custom').style.color = '#fff';
        document.querySelector('.custom').style.borderColor = '#fff';

         
        link.forEach(function(item){
           
            item.classList.remove('text-custom');
        })

    }

    console.log(scroll);
    
}

function getWindowBackToTop () {
    
    //document.documentElement.scrollTop = '0';
    document.documentElement.scrollTop = '0';
    document.body.scrollTop = '0';

    
}


next.addEventListener('click', slideToRight, false);
prev.addEventListener('click', slideToLeft, false);
slider.addEventListener('transitionend', transitionEnd, false);
window.addEventListener('scroll', makeScrollToTopBtnVisible);
document.getElementById('scrollToTop').addEventListener('click', getWindowBackToTop);
autoSlide();

