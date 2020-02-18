$(document).ready(function () {
    $('form').submit(function (e) { 
        e.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (result){
                alert(result)
            }
        });
    });
});