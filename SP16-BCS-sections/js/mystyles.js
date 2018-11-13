function btnClicked() {
    alert("Button Clicked");
}

function swap() {
    var top = document.getElementById('top');
    var bottom = document.getElementById('bottom');
    var temp = top.innerHTML;
    top.innerHTML = bottom.innerHTML;
    bottom.innerHTML = temp;

}
