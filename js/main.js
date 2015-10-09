$(document).ready(function () {
   var tr = $(".trClick");
    tr.click(function () {
        id = $(this).find("td[data-Id]").data('id');
        return location.href= location.href+"?cliente="+id;
    });
    tr.hover(function () {
        $(this).css({
            "cursor":"pointer",
        });
    });
});