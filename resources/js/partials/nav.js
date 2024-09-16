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
            navbar.classList.add("translate-y-[-100%]");
            navbar.classList.remove("bg-accent-400");
        } else {
            navbar.classList.remove("translate-y-[-100%]");
            navbar.classList.add("bg-accent-400");
        }
    } else {
        navbar.classList.remove("bg-accent-400");
    }

    lastScrollPosition = currentScrollPosition;
};

window.addEventListener("scroll", navbarOnScroll);
hamburgerBtn.addEventListener("click", hamburgerHandler);
