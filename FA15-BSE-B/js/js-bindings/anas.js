//alert("Hello anas");
window.onload = function () {
    console.log('This line runs after page load');
    var btnWhatToDo = document.getElementById('doAnasThing');
    btnWhatToDo.onclick = doAnasThing;

}
console.log('Before Page Load');

function btnWhatToDoClicked() {
    console.log('what to do clicked');

}


function doAnasThing() {
    console.log('Anas Ran Away');
    var top = document.getElementById("top");
    var bottom = document.getElementById("bottom");

    var temp = top.innerHTML;
    top.innerHTML = bottom.innerHTML;
    bottom.innerHTML = temp;
}