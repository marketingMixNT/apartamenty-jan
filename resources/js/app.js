import "./bootstrap";

import "./partials/swiper"



// document.addEventListener("livewire:navigated", () => {
//     const hamburgerBtn = document.querySelector(".hamburger");
//     const menu = document.querySelector("#menu");

//     const hamburgerHandler = () => {
//         hamburgerBtn.classList.toggle("is-active");
//         menu.classList.toggle("menu-open");
//         menu.classList.toggle("menu-close");
//     };
//     hamburgerBtn.addEventListener("click", hamburgerHandler);
// });








const footerYear = document.querySelector('#footerYear')

const today = new Date()

const currentYear = today.getFullYear()


footerYear.innerHTML = currentYear


const navbar = document.querySelector("#navbar");


const navbarOnScroll = () => {
    let scrollPosition = window.scrollY;

    if (scrollPosition >= 50) {
        navbar.classList.add("bg-secondary-200");
        
    } else {
        navbar.classList.remove("bg-secondary-200");
       
    }
};

window.addEventListener("scroll", navbarOnScroll);



const loader = document.querySelector('#preloader')



window.addEventListener('load', () => {
    loader.style.opacity = '0';
    setTimeout(() => {
        loader.style.display = 'none';
    }, 1000); 
});







//HERO CAROUSEL

    // // HERO CAROUSEL
    // new Swiper(".hero-carousel", {
    //     loop: true,
    //     effect: "fade",
    //     slidesPerView: 1,
    //     spaceBetween: 30,
    //     autoplay: {
    //         delay: 3500,
    //         disableOnInteraction: false,
    //     },
    //     modules: [Autoplay, EffectFade],
    // });

  