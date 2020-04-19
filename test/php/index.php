<?php
  $mycounter = 1;
  $mystring = "Hello";
  $myarray = array("One", "Two", "Three");

  
  function testFunction()
  {
    static $var = 0;
    echo $var;
    $var++;
  }
  testFunction();
  testFunction();
  testFunction();
  testFunction();
  testFunction();


  /*$temp = "Дата: ";
  echo longdate(time());

  function longdate($timestamp)
  {
    global $temp;
    return $temp . date("l F jS Y");
  }*/
?>