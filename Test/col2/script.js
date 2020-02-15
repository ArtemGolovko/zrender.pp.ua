class Output {
    sel = "#output";
    error = false;
    clear() {
      $(this.sel).removeClass();
      $(this.sel).text("0");
      this.error = false;
    };
    redit(text) {
      $(this.sel).removeClass();
      $(this.sel).text(text);
      this.error = false;
    };
    add(text) {
      if (this.error) {
        $(this.sel).text("");
        this.error = false;
      }
      $(this.sel).removeClass();
      $(this.sel).append(text);
    };
    err() {
      $(this.sel).addClass("err");
      $(this.sel).text("Error");
      this.error = true;
    };
    get() {
      return document.getElementById("output").innerHTML;
    };
};
var out = new Output();
var num1 = "";
var operator = "";
var num2 = "";
var n1Was = "now";
var oWas = false;
var n2Was = false;
var first = true;
var first2 = false;
var comaWas1 = false;
var comaWas2 = false;
var res;
var zero = false;
var strOperators = {
    "+": "+",
    "-": "-",
    "*": "×",
    "/": "÷"
};
$(".number").click(function(){
    let n = $(this).attr("id");
    if (n1Was === "now") {
      num1 += n;
    } else if (n2Was === "now") {
      num2 += n;
    }
    if (first) {
      out.redit(n);
      first = false;
    } else {
      out.add(n);
      first2 = false;
    }
});
$(".coma").click(function() {
  if (n1Was === "now") {
    if (comaWas1 === false) {
      if (first) {
        num1 += "0.";
      } else {
        num1 += ".";
      }
      comaWas1 = true;
      if (first) {
        out.redit("0.");
        first = false;
      } else {
        out.add(".");
      }
    }
  } else if (n2Was === "now") {
    if (comaWas2 === false) {
      if (first2) {
        num2 += "0.";
      } else {
        num2 += ".";
      }
      comaWas2 = true;
      if (first2) {
        out.add("0.");
        first2 = false;
      } else {
        out.add(".");
      }
    }
  }
});
$(".delall").click(function() {
  out.clear();
  num1 = "";
  operator = "";
  num2 = "";
  n1Was = "now";
  oWas = false;
  n2Was = false;
  first = true;
  first2 = false;
  comaWas1 = false;
  comaWas2 = false;
  res;
  zero = false;
});
$(".operator").click(function(){
    let o = $(this).attr("id");
    if(oWas === false){
      operator = o;
      n1Was = true;
      n2Was = "now";
      oWas = true;
      first = false;
      first2 = true;
      out.add(strOperators[o]);
    } else if (oWas){
      operator = o;
      out.redit(num1 + strOperators[o] + num2);
    }
});
$(".equally").click(function() {
  if(num1.length === 0){
    res = num2;
  } else if(num2.length === 0){
    res = num1;
  } else if(operator.length != 0){
    if(operator === "+"){
      res = +num1 + +num2;
    } else if(operator === "-"){
      res = +num1 - +num2;
    } else if(operator === "*"){
      res = +num1 * +num2;
    } else if(operator === "/"){
      if(1 / +num2 === Infinity){
          res;
          zero = true;
      } else {
        res = +num1 / +num2;
      }
    }
  }
  if(operator.length === 0){
    res;
  }else if(zero){
    out.err();
    num1 = "";
    operator = "";
    num2 = "";
    n1Was = "now";
    oWas = false;
    n2Was = false;
    first = true;
    first2 = false;
    comaWas1 = false;
    comaWas2 = false;
    res;
    zero = false;
  } else {
    out.redit(res);
    num1 = "";
    operator = "";
    num2 = "";
    n1Was = "now";
    oWas = false;
    n2Was = false;
    first = true;
    first2 = false;
    comaWas1 = false;
    comaWas2 = false;
    res;
    zero = false;
  }
});
$(".delone").click(function() {
  if(n1Was === "now"){
    if(comaWas1 && num1[num1.length - 1] === "."){
      num1 = num1.slice(0, num1.length - 1);
      comaWas1 = false;
    }else{
      num1 = num1.slice(0, num1.length - 1);
    }
    if(num1.length === 0){
      first = true;
    }
  } else  if(oWas || num2.length === 0){
    operator = "";
    oWas = false;
    n1Was = "now";
    n2Was = false;
    first2 = false;
  } else if(n2Was === "now" && num2.length != 0){
    if(comaWas2 && num2[num2.length - 1] === "."){
      num2 = num2.slice(0, num2.length - 1);
      comaWas2 = false;
    }else{
      num2 = num2.slice(0, num2.length - 1);
    }
    if(num2.length === 0){
      first2 = true;
    }
  }
  if(out.get().length === 1){
    out.clear();
  } else {
    out.redit(out.get().slice(0, out.get().length - 1));
  }
});