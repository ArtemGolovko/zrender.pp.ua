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
                /*$("#errortext").text("");
                var res = result.split(" ");
                if(res[0] === "success"){
                    alert(/res[1]/"success");
                } else if (res[0] === "unsuccess"){
                    if(res[1] === "wrong_name"){
                        $("#errortext").text("Wrong name!!!");
                    }
                }*/
                alert(result);
            }
        });
    });
});