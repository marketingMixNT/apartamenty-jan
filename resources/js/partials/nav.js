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