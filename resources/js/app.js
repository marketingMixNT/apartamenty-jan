import "./bootstrap";

import "./partials/footerYear";
import "./partials/gallery";
import "./partials/lightbox";
import "./partials/nav";
import "./partials/preloader";
import "./partials/swiper";



window.addEventListener('scroll', function() {
    const mobileBottomNav = document.querySelector('#mobile-bottom-nav');
    if (window.scrollY >= 300) {
        mobileBottomNav.classList.add('bottom-0');
        mobileBottomNav.classList.remove('-bottom-20');
    } else {
        mobileBottomNav.classList.remove('bottom-0');
        mobileBottomNav.classList.add('-bottom-20');
    }
});


