
function bindings() {
    $(".ajaxShow").click(showClicked);
    $(".btnDelete").click(deleteClicked);

}

$(bindings);
function deleteClicked(ev) {
    ev.preventDefault();

    var id = $(this).attr("data-id");
    $.get($(this).attr('href'),function (res) {
        //alert('deleted');
        $("#book-"+id).fadeOut();
    });
}
function showClicked(ev) {
    ev.preventDefault();
    var id = $(this).attr("data-id");
    $.get($(this).attr('href'),function (res) {
        $("#authorDetails-"+id).html(res);
    });
}

function ajaxShowDone(res) {

}