<?php
echo '<script>alert("';
echo $_SERVER['REMOTE_ADDR'].'\\n'.$_SERVER['HTTP_USER_AGENT'];
echo '");</script>';