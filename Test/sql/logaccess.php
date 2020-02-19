<?
$dns = 'mysql:host=localhost;dbname=zrender';
$pdo = new PDO($dns, 'zrender', '7dBWFPVx');
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."gcxhcgmhmhm5551");

$sql = "SELECT * FROM `test-logs` WHERE `login` = '$login' AND `email` = '$email' AND `pass` = '$pass'";
$query = $pdo->prepare($sql);
$query->execute();
$res = $query->fetch(PDO::FETCH_ASSOC);
if(!empty($res)){
    setcookie('user', $res['login'], time() + 3600, "/Test/sql/");
    echo "reload";
} else {
    echo "user_not_found";
}

?>