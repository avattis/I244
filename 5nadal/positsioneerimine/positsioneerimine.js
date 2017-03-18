
var div = document.getElementsByClassName('#out');
var toprandom;
var leftrandom;

div.onclick = function () {
    "use strict";
    toprandom = Math.random() * 400;
    leftrandom = Math.random() * 800;
    div.style.top = toprandom + "px";
    div.style.left = leftrandom + "px";
};
