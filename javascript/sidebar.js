const menuBurger = document.querySelector(".menu");

const wrapper = document.querySelector(".wrapper");

const sidebar = document.querySelector(".sidebar");

menuBurger.addEventListener("click", () => {
    wrapper.classList.toggle("slide");
    sidebar.classList.toggle("slide");
});

wrapper.addEventListener("click", () => {
    wrapper.classList.toggle("slide");
    sidebar.classList.toggle("slide");
});
