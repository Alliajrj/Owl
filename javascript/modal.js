const modal = document.querySelector(".card");

const home = document.querySelector(".cardback");

const plume = document.querySelector("#plume");

const plume2 = document.querySelector("#plume2");

const croix = document.querySelector(".close");

plume.addEventListener("click", () => {
    modal.classList.remove("hidden");
    home.classList.add("cardback");
});
plume2.addEventListener("click", () => {
    modal.classList.remove("hidden");
    home.classList.add("cardback");
});
croix.addEventListener("click", () => {
    modal.classList.add("hidden");
    home.classList.remove("cardback");
});
