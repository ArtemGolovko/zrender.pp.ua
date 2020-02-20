<?php
$task = $_POST['task'];
$dns = 'mysql:host=localhost;dbname=zrender';
$pdo = new PDO($dns, 'zrender', '7dBWFPVx');

$sql = "INSERT INTO `test-tasks` (task) VALUES('$task')";
$query = $pdo->prepare($sql);
$query->execute();

$qwerty = $pdo->query("SELECT * FROM `test-tasks` WHERE task = '$task'");
$row = $qwerty->fetch(PDO::FETCH_OBG);
echo("[$row->id, '$row->task']");
?>