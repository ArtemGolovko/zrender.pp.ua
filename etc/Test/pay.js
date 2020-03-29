$(document).ready(function() {
  $("#pay").click(() => {
    $("#pay").detach();
    $("#hide").show();
    $("#hide").attr("id", "show");
    $("#check").click(() => {
      let email = $("#email").val();
      let pass = $("#pass").val();
      let radio = $('input[type="radio"]:checked').val();
      alert(radio);
      if (email.length != 0 && pass.length != 0) {
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
            etrue = [false, false, false, false];
          }
        });
        if (etrue[0] && etrue[1] && etrue[2]) {
          let pass = $("#pass").val();
          alert(email + " " + pass);
          $("#show").hide();
        } else {
          throw new Error("Wrong data!!!");
        }
      }
    });
  });
});
