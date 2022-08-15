// Backtotop extension, https://github.com/GiovanniSalmeri/yellow-backtotop

"use strict";
document.addEventListener("DOMContentLoaded", function() {
    var link = document.getElementById("backtotop");
    window.addEventListener("scroll", function() {
        if ((document.body.scrollTop || document.documentElement.scrollTop) > window.innerHeight) {
            link.style.opacity = "1";
            link.style.visibility = "visible"; // accessibility
        } else {
            link.style.opacity = "0";
            link.style.visibility = "hidden"; // accessibility
        }
    });
});
