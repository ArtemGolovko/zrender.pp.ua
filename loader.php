<?php 
define('TEKA', dirname(__FILE__));
define('HTML_TEKA', 'https://' . substr( TEKA, 27));
define('IMG', HTML_TEKA . '/images');
define('BOOTSTRAP', HTML_TEKA . '/libs/bootstrap');
define('JQUERY', HTML_TEKA . '/libs/jQuery');
define('GAMES', HTML_TEKA . '/game');
function upper_first_letter($string){
	return mb_convert_case($string[0],  MB_CASE_UPPER, "UTF-8") . substr($string, 1);
};
function no_end($str){
	$len = strlen($str);
	$end = $str[$len - 4] . $str[$len - 3] . $str[$len - 2] . $str[$len - 1];
	if ($end === ".php"){
		return substr($str, 0, -4);
	}
return $str;
}
?>