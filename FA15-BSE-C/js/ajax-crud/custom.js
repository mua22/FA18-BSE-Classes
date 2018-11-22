$(function(){
 $("#linkAjax").click(doAjaxThing);

});

function doAjaxThing(e) {
    e.preventDefault();
    console.log("Initiating ajax");
    $.get("show.php?id=8",function (res) {
        $("#result").html(res);
        console.log("Ajax Completed");
    });
    console.log("Should this appear after Ajax");
}