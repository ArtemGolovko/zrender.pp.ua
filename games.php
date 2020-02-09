<?php
$path = pathinfo($_SERVER['REQUEST_URI']);
$title = "auto";
require( dirname( __FILE__ ) . '/loader.php');
require( TEKA . '/header.php');
require( TEKA . '/body-header.php');
?>
    </body>
</html>