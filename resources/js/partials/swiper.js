
import Swiper from "swiper";
import {
    Autoplay,
    EffectFade,
    Navigation,
    Pagination,
    EffectCoverflow,
} from "swiper/modules";
import "swiper/swiper-bundle.css";

//HERO CAROUSEL
new Swiper(".hero-carousel", {
    loop: true,
    effect: "fade",
    slidesPerView: 1,

    spaceBetween: 30,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    modules: [Autoplay, EffectFade],
});


new Swiper(".apartment-gallery-carousel", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,
    centeredSlides: true,
    breakpoints: {
        1024: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1400: {
            slidesPerView: 2,
            spaceBetween: 50,
        },
    },

    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    modules: [Autoplay],
});