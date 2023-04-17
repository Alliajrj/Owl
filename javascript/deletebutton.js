const deletebtn = document.querySelectorAll(".deletebtn");

const deletepost = document.querySelectorAll(".delete");

const deleteclose = document.querySelectorAll(".btn");

array.forEach((element) => {});

deletebtn.addEventListener("click", () => {
    deletepost.classList.remove("hidden");
});

deleteclose.addEventListener("click", () => {
    deletepost.classList.add("hidden");
});
