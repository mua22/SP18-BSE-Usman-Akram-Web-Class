function h2Clicked() {
    var ul = document.getElementById('menu');
    ul.innerHTML = ul.innerHTML+"<li>Friend</li>";
}


/*window.onload = function (ev) {
    var h2 = document.getElementById('h2Tag');
    h2.onclick = h2Clicked;

}*/
window.onload = bindings;

function bindings() {
    var h2 = document.getElementById('h2Tag');
    h2.onclick = h2Clicked;

}