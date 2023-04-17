const menuBurger = document.querySelector(".menu");

const wrapper = document.querySelector(".wrapper");

const sidebar = document.querySelector(".sidebar");

const research = document.querySelector(".research");

menuBurger.addEventListener("click", () => {
    wrapper.classList.toggle("slide");
    sidebar.classList.toggle("slide");
});

wrapper.addEventListener("click", () => {
    wrapper.classList.toggle("slide");
    sidebar.classList.toggle("slide");
});
