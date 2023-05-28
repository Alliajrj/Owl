const textarea = document.querySelector(".text-input");

const submit = document.getElementById("submit");

textarea.addEventListener("input", () => {
    localStorage.setItem(".text-input", textarea.value);
});

const storage = localStorage.getItem(".text-input");
if (storage) {
    textarea.value = storage;
}

submit.addEventListener("click", () => {
    localStorage.clear();
});

