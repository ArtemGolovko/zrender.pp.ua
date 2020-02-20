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
                var res = eval(result);
                $('ul').prepend('<li>' + res[1] + '<button id="'+ res[0] +'" class="del">Delete</button></li>');
            }
        });
    });
    
});