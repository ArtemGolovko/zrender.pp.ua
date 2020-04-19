<?php
if(!empty($_POST)) {
  $name = mb_convert_encoding($_POST["name"], "UTF-8", mb_detect_encoding($_POST["name"]));
  $email = mb_convert_encoding($_POST["email"], "UTF-8", mb_detect_encoding($_POST["email"]));
  $text = mb_convert_encoding($_POST["text"], "UTF-8", mb_detect_encoding($_POST["text"]));
  //mail("webmaster@zrender.pp.ua", "Письмо от ".$name, '<'.$email.">\n".$text);
  echo $name." ".$email." ".$text;
};
?>
<html>
<head></head>
<body>
<form action="" method="post">
<p>NAME: <input type="text" name="name" minlength="4" maxlength="20" required></p>
<p>EMAIL: <input type="email" name="email" minlength="4" maxlength="20" required></p>
<p><textarea name="text" required></textarea></p>
<p><input type="submit"></p>
</form>
</body>
</html>