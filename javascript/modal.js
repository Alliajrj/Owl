const modal = document.querySelector(".card");

const plume = document.querySelector("#plume");

const plume2 = document.querySelector("#plume2");

const croix = document.querySelector(".close");

plume.addEventListener("click", () => {
    modal.classList.remove("hidden");
});
plume2.addEventListener("click", () => {
    modal.classList.remove("hidden");
});
croix.addEventListener("click", () => {
    modal.classList.add("hidden");
});
