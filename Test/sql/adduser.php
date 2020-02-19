<?php
$dns = 'mysql:host=localhost;dbname=zrender';
$pdo = new PDO($dns, 'zrender', '7dBWFPVx');
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."gcxhcgmhmhm5551");

$sql = "INSERT INTO `test-logs` (`login`, `email`, `pass`) VALUES('".$login."', '".$email."', '".$pass."')";
$query = $pdo->prepare($sql);
$query->execute();
echo "OK";
?>