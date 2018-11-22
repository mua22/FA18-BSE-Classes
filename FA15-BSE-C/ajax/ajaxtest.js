
function btnClicked() {
    console.log("Starting ajax");
    $.get("hareem.txt",function (res) {
        $("#result").html(res);
        console.log("Received: "+res);
    });
    console.log('Ajax Done');

}

$(function () {
    $("#btnGet").click(btnClicked);
    $("#btnPost").click(function (ev) {
        $.post('process.php',{name:"hareem fatima"},function (res) {
            $("#result").html(res);
        })
    });
});

/*function bindings() {
    $("button").click(btnClicked);

}*/

//window.onload = bindings;
//$(bindings);
//$(document).read(bindings);