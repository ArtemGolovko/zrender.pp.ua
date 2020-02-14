$(document).ready(function () {
    var elemA  = $("#link");
    var link = elemA.attr("href");
    elemA.attr("href", link.slice(0, link.length - 5) + "2.html#")
    elemA.text(link.slice(0, link.length - 5) + "2.html#");
    var errorHaleder = function () {
        alert("Error");
    };
    var links = ["", "", ""];
    var vals = ["", "", ""];
    var check = function (nameArg, emailArg, passArg) {
        var name = nameArg;
        var email = emailArg;
        var pass = passArg;
        var etrue = [false, false, false, false, false, [false, 0, 0]];
        if (email.length > 3 && pass.length > 3 && name.length > 3) {
            let eArr = Array.from(email);
            eArr.forEach(elem => {
              if (elem != "@" && !etrue[5][0]) {
                etrue[0] = true;
              } else if (elem === "@" && !etrue[5][0]) {
                etrue[1] = true;
                etrue[5][0] = true;
                etrue[5][1] = eArr.indexOf(elem) + 1;
              } else if (elem != "@" && etrue[5][0]) {
                etrue[2] = true;
                if(etrue[5][1] != 0 && elem === "." && (etrue[5][1] + 1 < eArr.indexOf(elem) + 1)){
                  etrue[3] = true;
                  etrue[5][2] = eArr.indexOf(elem) + 1;
                } else if(etrue[5][2] != 0 && etrue[5][2] < (eArr.indexOf(elem) + 1) && etrue[3]){
                  etrue[4] = true;
                }
              } else {
                alert(elem);
                return false;
              }
            });
            if (etrue[0] && etrue[1] && etrue[2] && etrue[3] && etrue[4]) {
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