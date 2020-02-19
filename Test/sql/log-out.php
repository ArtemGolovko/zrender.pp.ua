<?php
setcookie('user', $res['login'], time() - 3600, "/Test/sql/");
header("Location: /Test/sql/");
?>