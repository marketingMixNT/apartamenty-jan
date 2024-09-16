const hamburgerBtn = document.querySelector(".hamburger");
const menu = document.querySelector("#menu");
const navbar = document.querySelector("#navbar");
const body = document.querySelector("body");
let lastScrollPosition = 0;

const hamburgerHandler = () => {
    hamburgerBtn.classList.toggle("is-active");
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-close");
    body.classList.toggle("overflow-hidden");
    navbar.classList.add("bg-accent-400");
};

const navbarOnScroll = () => {
    let currentScrollPosition = window.scrollY;

    if (currentScrollPosition >= 50) {
        if (currentScrollPosition > lastScrollPosition) {
            // Scrolling down
            navbar.classList.add("translate-y-[-100%]");
            navbar.classList.remove("bg-accent-400");
        } else {
            // Scrolling up
            navbar.classList.remove("translate-y-[-100%]");
            navbar.classList.add("bg-accent-400");
        }
    } else {
        // Scroll position is less than 50px
        navbar.classList.remove("bg-accent-400");
    }

    // Update last scroll position
    lastScrollPosition = currentScrollPosition;
};

window.addEventListener("scroll", navbarOnScroll);
hamburgerBtn.addEventListener("click", hamburgerHandler);
