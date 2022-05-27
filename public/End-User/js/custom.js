// ------------------ Start Dark Mood
let SkinIcon = document.querySelector('#skin-icon'),
    DarkTheme = document.querySelectorAll('.dark-mood'),
    LightTheme = document.querySelectorAll('.light-mood');

for (let i = 0; i < DarkTheme.length; i++) {
    DarkTheme[i].addEventListener('click', () => {
        SkinIcon.setAttribute("href", "css/main-dark-mood.css");
        localStorage.setItem('dark-theme', "css/main-dark-mood.css");
    });
}

if (localStorage.getItem('dark-theme')) {
    SkinIcon.setAttribute("href", "css/main-dark-mood.css");
}

for (let i = 0; i < LightTheme.length; i++) {
    LightTheme[i].addEventListener('click', () => {
        SkinIcon.setAttribute("href", "css/main.css");
        localStorage.removeItem('dark-theme');
    });
}
// ------------------ End Dark Mood

// // ------------------ Start Nice Scroll
// $("body").niceScroll({
//     cursorcolor: "blueviolet",
//     cursorwidth: "8px"
// });
// // ------------------ End Nice Scroll


// ------------------ Start Side Menu
let mobielBtn = document.querySelectorAll(".mobile-btn"),
    sideMenu = document.querySelector(".side-menu"),
    bodyMove = document.getElementsByTagName("body")[0],
    overlayMenu = document.querySelector(".overlay-menu");

for (let i = 0; i < mobielBtn.length; i++) {
    mobielBtn[i].addEventListener('click', () => {
        sideMenu.classList.add('open');
        bodyMove.classList.add('push');
        overlayMenu.classList.add('showOverlayBlock');
        setTimeout(function() {
            overlayMenu.classList.add('showOverlayOpacity');
        }, 100);
    });
};

overlayMenu.addEventListener('click', () => {
    sideMenu.classList.remove('open');
    bodyMove.classList.remove('push');
    overlayMenu.classList.remove('showOverlayOpacity');
    setTimeout(function() {
        overlayMenu.classList.remove('showOverlayBlock');
    }, 700);
});
// ------------------ End Side Menu


// ------------------ Start Go To Top
let ScrolTop = document.querySelector(".go-top"),
    body = document.querySelector("html , body");
window.addEventListener("scroll", () => {
    if (body.scrollTop >= 200) {
        ScrolTop.style.display = "block";
        ScrolTop.addEventListener("click", () => {
            window.scrollTo(0, 0);
        });
    } else {
        ScrolTop.style.display = "none";
    }
});
// ------------------ End Go To Top