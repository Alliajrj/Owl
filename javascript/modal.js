const modal = document.querySelector(".card");

const plume = document.querySelector("#plume");

const croix = document.querySelector(".card>.top>.icons:nth-child(1)")

const check = document.querySelector(".card>.top>.icons:nth-child(2)")

plume.addEventListener ("click", () => {
    modal.classList.toggle("hidden")
})
croix.addEventListener ("click", () => {
    modal.classList.toggle("hidden")
})
check.addEventListener ("click", () => {
    modal.classList.toggle("hidden")
})