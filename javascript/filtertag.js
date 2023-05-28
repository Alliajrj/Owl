let allPosts = document.querySelectorAll(".posts");

let buttonMystere = document.querySelectorAll(".couleur-tag-1");
let mystere = document.querySelectorAll(".mystere");

buttonMystere.forEach((btn) => {
    btn.addEventListener("click", () => {
        allPosts.forEach((post) => {
            post.classList.remove("post");
            post.classList.add("none");
        });
        mystere.forEach((mys) => {
            mys.classList.remove("none");
            mys.classList.add("posts");
        });
    });
});

let buttonCrime = document.querySelectorAll(".couleur-tag-2");
let crime = document.querySelectorAll(".crime");

buttonCrime.forEach((btn) => {
    btn.addEventListener("click", () => {
        allPosts.forEach((post) => {
            post.classList.remove("post");
            post.classList.add("none");
        });
        crime.forEach((cri) => {
            cri.classList.remove("none");
            cri.classList.add("posts");
        });
    });
});

let buttonNonresolu = document.querySelectorAll(".couleur-tag-3");
let nonresolu = document.querySelectorAll(".non-resolu");

buttonNonresolu.forEach((btn) => {
    btn.addEventListener("click", () => {
        allPosts.forEach((post) => {
            post.classList.remove("post");
            post.classList.add("none");
        });
        nonresolu.forEach((non) => {
            non.classList.remove("none");
            non.classList.add("posts");
        });
    });
});

let buttonMeurtre = document.querySelectorAll(".couleur-tag-4");
let meurtre = document.querySelectorAll(".meurtre");

buttonMeurtre.forEach((btn) => {
    btn.addEventListener("click", () => {
        allPosts.forEach((post) => {
            post.classList.remove("post");
            post.classList.add("none");
        });
        meurtre.forEach((meu) => {
            meu.classList.remove("none");
            meu.classList.add("posts");
        });
    });
});

let buttonInvestigation = document.querySelectorAll(".couleur-tag-5");
let investigation = document.querySelectorAll(".investigation");

buttonInvestigation.forEach((btn) => {
    btn.addEventListener("click", () => {
        allPosts.forEach((post) => {
            post.classList.remove("post");
            post.classList.add("none");
        });
        investigation.forEach((inv) => {
            inv.classList.remove("none");
            inv.classList.add("posts");
        });
    });
});

let buttonFaitsdivers = document.querySelectorAll(".couleur-tag-6");
let faitsdivers = document.querySelectorAll(".faits-divers");

buttonFaitsdivers.forEach((btn) => {
    btn.addEventListener("click", () => {
        allPosts.forEach((post) => {
            post.classList.remove("post");
            post.classList.add("none");
        });
        faitsdivers.forEach((fai) => {
            fai.classList.remove("none");
            fai.classList.add("posts");
        });
    });
});

let buttonEnigmes = document.querySelectorAll(".couleur-tag-7");
let enigmes = document.querySelectorAll(".enigmes");

buttonEnigmes.forEach((btn) => {
    btn.addEventListener("click", () => {
        allPosts.forEach((post) => {
            post.classList.remove("post");
            post.classList.add("none");
        });
        enigmes.forEach((eni) => {
            eni.classList.remove("none");
            eni.classList.add("posts");
        });
    });
});

let buttonPreuves = document.querySelectorAll(".couleur-tag-8");
let preuves = document.querySelectorAll(".preuves");

buttonPreuves.forEach((btn) => {
    btn.addEventListener("click", () => {
        allPosts.forEach((post) => {
            post.classList.remove("post");
            post.classList.add("none");
        });
        preuves.forEach((pre) => {
            pre.classList.remove("none");
            pre.classList.add("posts");
        });
    });
});

let buttonTheories = document.querySelectorAll(".couleur-tag-9");
let theories = document.querySelectorAll(".theories");

buttonTheories.forEach((btn) => {
    btn.addEventListener("click", () => {
        allPosts.forEach((post) => {
            post.classList.remove("post");
            post.classList.add("none");
        });
        theories.forEach((the) => {
            the.classList.remove("none");
            the.classList.add("posts");
        });
    });
});

let buttonParanormal = document.querySelectorAll(".couleur-tag-10");
let paranormal = document.querySelectorAll(".paranormal");

buttonParanormal.forEach((btn) => {
    btn.addEventListener("click", () => {
        allPosts.forEach((post) => {
            post.classList.remove("post");
            post.classList.add("none");
        });
        paranormal.forEach((par) => {
            par.classList.remove("none");
            par.classList.add("posts");
        });
    });
});

let resetbtn = document.querySelector(".reset");

resetbtn.addEventListener("click", () => {
    document.location.href = "index.php";
});


