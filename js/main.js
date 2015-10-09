$(document).ready(function () {
   var tr = $(".trClick");
    tr.click(function () {
        var id = $(this).find("td[data-Id]").data('id'),
            url = location.href,
            result = null;

        if(url.indexOf('?') > 0){
            query = url.split('?');

            result = location.replace("?"+query[1]+"&cliente="+id);
        }else{
            result = location.href= location.href+"?cliente="+id;
        }
        return result;
    });

    tr.hover(function () {
        $(this).css({
            "cursor":"pointer",
        });
    });
});