const keysearch = document.querySelector("#key");

const wrapper = document.querySelector(".wrapper");

const research = document.querySelector(".research");

menuBurger.addEventListener("click", () => {
    wrapper.classList.toggle("slide");
    sidebar.classList.toggle("slide");
});

wrapper.addEventListener("click", () => {
    wrapper.classList.toggle("slide");
    sidebar.classList.toggle("slide");
});