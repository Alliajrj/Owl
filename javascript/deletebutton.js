const deletebtn = document.querySelectorAll(".deletebtn");

deletebtn.forEach(function (icon) {
    console.log(icon);
    icon.addEventListener("click", function () {
        console.log("cc");
        window.confirm("Êtes-vous sûr de supprimer le post ?");
    });
});
