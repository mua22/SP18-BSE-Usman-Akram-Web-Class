
window.onload = bindings;

function bindings() {
    var h2 = document.getElementById('h2Tag');
    h2.onclick = test;
}
function test() {
    var h2 = document.getElementById('h2Tag');
    h2.innerHTML = " This is modified H2 Tag";
}
// alert('hello');