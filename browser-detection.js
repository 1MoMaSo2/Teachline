document.addEventListener('DOMContentLoaded', function() {
    const body = document.body;
    const userAgent = navigator.userAgent;

    if (userAgent.indexOf("Chrome") > -1) {
        body.classList.add("browser-chrome");
    } else if (userAgent.indexOf("Firefox") > -1) {
        body.classList.add("browser-firefox");
    } else if (userAgent.indexOf("Safari") > -1 && userAgent.indexOf("Chrome") === -1) {
        body.classList.add("browser-safari");
    } else if (userAgent.indexOf("Edge") > -1) {
        body.classList.add("browser-edge");
    } else if (userAgent.indexOf("Trident") > -1) { // For older IE versions
        body.classList.add("browser-ie");
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const myElement = document.getElementById("myElement");
    const desiredHeight = "100%"; // ارتفاع مورد نظر شما

    const computedHeight = window.getComputedStyle(myElement).height;

    if (computedHeight !== desiredHeight) {
        myElement.style.height = desiredHeight;
    }
});