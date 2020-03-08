<?php
    $uri = $_SERVER['REQUEST_URI'];
    $host = "https://".$_SERVER['HTTP_HOST'];
    $urli = substr($uri, 1);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$uri?></title>
</head>
<body>
    <?php if(strripos($uri, ".htaccess") !== false): ?>
        <h1>403 FORBIDEN</h1>
    <?php else: ?>
        <h1><?=$uri?></h1>
        <?php
            /*echo $urli;*/
            $files = scandir($urli);
            echo "<ul>\n";
            foreach($files as $file) {
                if($file !== "."){
                    echo '<li><a href="'.$host.$uri.$file.'">'.$file.'</a></li>'."\n";
                }
            };
            echo "</ul>\n";
        ?>
    <?php endif; ?>
</body>
</html>
