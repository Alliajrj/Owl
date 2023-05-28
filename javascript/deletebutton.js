const deletebtn = document.querySelectorAll(".deletebtn");

deletebtn.forEach(function (icon) {
    icon.addEventListener("click", function () {
        window.confirm("Êtes-vous sûr de supprimer le post ?");
    });
});
