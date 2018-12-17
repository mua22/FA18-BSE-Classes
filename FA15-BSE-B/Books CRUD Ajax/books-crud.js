/*
window.onload = bindings;


function bindings() {
    $(".btnShow").click(btnShowClicked);

}*/

/*$(function () {
    $(".btnShow").click(btnShowClicked);

});*/
$(document).ready(function () {
    $(".btnShow").click(btnShowClicked);
    $(".btnDelete").click(function (event) {
        event.preventDefault();
        var href = $(this).attr('href');
        var id = $(this).attr('data-id');
        $.get(href,function (result) {
            $('#tr-'+id).fadeOut();

        });

    });
});

function btnShowClicked(ev) {
    ev.preventDefault();
    console.log('Starting Ajax');
    var href = $(this).attr('href');
    var id = $(this).attr('data-id');
    $.get(href,function (result) {
        console.log('Ajax Returned');
       $('#result-'+id).html(result);

    });
    $.get("jsonresponse.php",function (result) {
        res = JSON.parse(result);
       console.log(res.name);

    });
    
    console.log('Ajax Completed');
}