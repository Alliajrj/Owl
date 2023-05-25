const home = document.querySelector(".container");

setInterval(() => {
    const y = home.getBoundingClientRect().y;
    if (y < -100) {
        const logsign = document.querySelector(".background");
        logsign.classList.add("appear");
    }
}, 500);

