

$(function () {
   $(".btnDel").click(handleDelete);
   $(".btnShow").click(handleShow);
});

function handleShow(ev) {
ev.preventDefault();
var show = $(this);
var href = $(this).attr('href');
$.get(href,function (res) {
    show.closest('td').append(res);
});
}
function handleDelete(ev) {
ev.preventDefault();
var del = $(this);
var href = $(this).attr('href');
$.get(href,function (res) {
    del.closest('tr').fadeOut();
});
}