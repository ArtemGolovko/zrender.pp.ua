<?php
$path = pathinfo($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $path['basename']; ?> - 404</title>
</head>
<body>
<h1 style="text-align: center">Error 404 - not found</h1>
<p style="text-align: center"><?php echo $path['basename']; ?> not found in <?php echo $path['dirname']; ?>
<p style="text-align: center"><a href="/" title="Back to zrender"><- zrender</a></p>
</body>
</html>