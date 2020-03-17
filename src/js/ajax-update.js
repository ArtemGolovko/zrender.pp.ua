$("a").click(function (e) {
    //e.preventdefault();
    var url = $(this).attr("href");
    $.ajax({
        url: url,
        type: "post",
        success: function (result) {
            alert(result);
        },
        error: () => alert("error")
    });
    return false;
});