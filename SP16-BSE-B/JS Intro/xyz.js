function h1clicked(msg) {
    alert(msg);

}


window.onload = function () {
    var h2 = document.getElementById('h2Tag');
    h2.onclick = h2Clicked;

};

function h2Clicked() {
    alert('h2 Clicked');
}