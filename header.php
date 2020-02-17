<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<?php
		if(isset($title)){
			switch($title){
			  case "up":
				echo "<title>Sign up | ZRender</title>";
				break;
			  case "log":
				echo "<title>Log in | ZRender</title>";
				break;
			  case "auto":
				echo "<title> " . upper_first_letter(no_end($path[basename])) . " | ZRender</title>";
				break;
			  case "numg":
				echo "<title>Игра угадай число</title>";
				break;
			}
		}else{echo "<title>ZRender</title>";}
		?>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo HTML_TEKA . '/favicon.ico'; ?>" />
		<link rel="stylesheet" href="<?php echo BOOTSTRAP . '/css/bootstrap.min.css'; ?>">
		<style type="text/css">
		<?php echo file_get_contents(TEKA . '/style.css'); ?>
		</style>
		<script src="<?php echo JQUERY . '/jquery-3.4.1.slim.min.js' ?>"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="<?php echo BOOTSTRAP . '/js/bootstrap.min.js'; ?>"></script>
	</head>