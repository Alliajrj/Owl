const deletebtn = document.querySelector(".deletebtn");

const deletepost = document.querySelector(".delete");

const deleteclose = document.querySelector(".btn");

deletebtn.addEventListener("click", () => {
    deletepost.classList.remove("hidden");
});

deleteclose.addEventListener("click", () => {
    deletepost.classList.add("hidden");
});

