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
    navbar.classList.add("nav-color");
    navbar.classList.remove("nav-color--transparent");
};

const navbarOnScroll = () => {
    let currentScrollPosition = window.scrollY;

    if (currentScrollPosition >= 50) {
        if (currentScrollPosition > lastScrollPosition) {
            navbar.classList.add("nav-hidden");
            navbar.classList.remove("nav-visible");
        } else {
           
            navbar.classList.add("nav-visible");
            navbar.classList.remove("nav-hidden");
            navbar.classList.add("nav-color");
            navbar.classList.remove("nav-color--transparent");
        }
    } else {
        navbar.classList.remove("nav-color");
        navbar.classList.add("nav-color--transparent");
    }

    lastScrollPosition = currentScrollPosition;
};

window.addEventListener("scroll", navbarOnScroll);
hamburgerBtn.addEventListener("click", hamburgerHandler);
