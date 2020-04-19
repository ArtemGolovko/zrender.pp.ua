<?php
$str = "actiom/meggd?posd=sdsd";
$pos = stripos($str, "?");
$var = substr($str, 0, $pos);
echo $var;