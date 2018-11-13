
/*window.onload = function (ev) {
    alert("this will execute on page load");
}*/
window.onload = bindings;
alert("this line will execute before page load");
function swap() {
    var top = document.getElementById('top');
    var bottom = document.getElementById('bottom');
    var temp = top.innerHTML;
    top.innerHTML = bottom.innerHTML;
    bottom.innerHTML = temp;

}
function bindings(){
    var btn = document.getElementById('swapBtn');
    btn.onclick = swap;

}