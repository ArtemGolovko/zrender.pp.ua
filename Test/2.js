$(document).ready(function () {
    var elemA  = $("#link");
    var link = elemA.attr("href");
    elemA.attr("href", link.slice(0, link.length - 5) + "2.html#")
    elemA.text(link.slice(0, link.length - 5) + "2.html#");
    var errorHaleder = function () {
        throw new Error("Error");
    };
    var links = ["", "", ""];
    var vals = ["", "", ""];
    var check = function (nameArg, emailArg, passArg) {
        var name = nameArg;
        var email = emailArg;
        var pass = passArg;
        if (email.length > 3 && pass.length > 3 && name.length > 3) {
            let eArr = Array.from(email);
            let etrue = [false, false, false, false];
            eArr.forEach(elem => {
              if (elem != "@" && !etrue[3]) {
                etrue[0] = true;
              } else if (elem === "@" && !etrue[3]) {
                etrue[1] = true;
                etrue[3] = true;
              } else if (elem != "@" && etrue[3]) {
                etrue[2] = true;
              } else {
                return false;
              }
            });
            if (etrue[0] && etrue[1] && etrue[2]) {
              return true;
            } else {
              return false;
            }
          } else {
              return false;
          }
    };
    $("#text").change(function (){
        vals[0] = $("#text").val();
        links[0] = "name=" + vals[0];
        if(check(vals[0], vals[1], vals[2])){
            elemA.attr("href", link + "?" + links.join(""));
            elemA.text(link + "?" + links.join(""));
            elemA.attr("class", "");
        } else {
            elemA.attr("href", link.slice(0, link.length - 5) + "2.html#");
            elemA.text(link.slice(0, link.length - 5) + "2.html#");
            elemA.attr("class", "error");
            $(".error").click(errorHaleder);
        }
    });
    $("#email").change(function (){
        vals[1] = $("#email").val();
        links[1] = "&email=" + vals[1];
        if(check(vals[0], vals[1], vals[2])){
            elemA.attr("href", link + "?" + links.join(""));
            elemA.text(link + "?" + links.join(""));
            elemA.attr("class", "");
        } else {
            elemA.attr("href", link.slice(0, link.length - 5) + "2.html#");
            elemA.text(link.slice(0, link.length - 5) + "2.html#");
            elemA.attr("class", "error");
            $(".error").click(errorHaleder);
        }
    });
    $("#pass").change(function (){
        vals[2] = $("#pass").val();
        links[2] = "&pass=" + vals[2];
        if(check(vals[0], vals[1], vals[2])){
            elemA.attr("href", link + "?" + links.join(""));
            elemA.text(link + "?" + links.join(""));
            elemA.attr("class", "");
        } else {
            elemA.attr("href", link.slice(0, link.length - 5) + "2.html#");
            elemA.text(link.slice(0, link.length - 5) + "2.html#");
            elemA.attr("class", "error");
            $(".error").click(errorHaleder);
        }
    });
});