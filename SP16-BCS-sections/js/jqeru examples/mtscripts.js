$(function(){
    $("#btnAdd").click(btnAddClicked);
    $("#announcements li").click(bindMagic);
});


function btnAddClicked() {
    var txt = $("#inputAdd").val();
    $("#announcements").append("<li>"+txt+"</li>");
}

function bindMagic() {
$(this).hide();
}