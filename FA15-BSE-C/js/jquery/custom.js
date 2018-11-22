$(function(){
    $("#addTaskButton").click(function(){
        var task = $("#newTask").val();

        $("#tasks").append("<li class='task'>"+task+"</li>");
    });

    $(".task").click(function () {
        $(this).hide();
    });
    

});
