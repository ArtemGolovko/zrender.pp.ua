$(document).ready(function () {
    let links = ["", "", ""];
    let p1 = $("#p1");
    let checkbox1 = $("#23564");
    let ja = $("#link");
    let link = ja.attr('href');
    checkbox1.click(function(){
        if($(this).is(":checked")){
            p1.show();
            p1.text("Product1");
            links[0] = "," + $(this).attr('id');
        } else if($(this).is(":not(:checked)")){
            p1.hide();
            p1.text("");
            links[0] = "";
        }
        ja.attr('href', link + links.join(""));
        //ja.text(ja.attr('href'));
    });
    let p2 = $("#p2");
    let checkbox2 = $("#25427");
    checkbox2.click(function(){
        if($(this).is(":checked")){
            p2.show();
            p2.text("Product2");
            links[1] = "," + $(this).attr('id');
        } else if($(this).is(":not(:checked)")){
            p2.hide();
            p2.text("");
            links[1] = "";
        }
        ja.attr('href', link + links.join(""));
        //ja.text(ja.attr('href'));
    });
    let p3 = $("#p3");
    let checkbox3 = $("#22349");
    checkbox3.click(function(){
        if($(this).is(":checked")){
            p3.show();
            p3.text("Product3");
            links[2] = "," + $(this).attr('id');
        } else if($(this).is(":not(:checked)")){
            p3.hide();
            p3.text("");
            links[2] = "";
        }
        ja.attr('href', link + links.join(""));
        //ja.text(ja.attr('href'));
    });
});