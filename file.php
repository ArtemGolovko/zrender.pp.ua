<?php
//stat();

$uri = $_SERVER['REQUEST_URI'];

$host = "https://".$_SERVER['HTTP_HOST'];

$urli = substr($uri, 1);

function getImage ($file)
{
    $keys = Array(
        "html" => "29515",
        "css" => "Css-File-512",
        "zip" => "126-512",
        "yml" => "377190",
        "ico" => "ico-512",
        "java" => "Java-File-512",
        "json" => "json-512",
        "mp4" => "movie-video-file-clip-youtube-512",
        "php" => "php-512",
        "jar" => "unnamed(1)",
        "js" => "unnamed",
        "ini" => "v-17-512",
        "png" => "Very-Basic-Image-File-icon",
        "jpg" => "Very-Basic-Image-File-icon",
        "xml" => "xml-512"
    );
    $file = explode(".", $file);
    $file = $file[count($file) - 1];
    if(array_key_exists($file, $keys)){
        $file = $keys[$file];
    } else {
        $file = "28-512";
    }
    return $file;
}

function getFiles(array $files, $uri, $host, $urli)
{   
    foreach ($files as $file) {
        if($file !== "."){
            if(is_dir($urli.$file) && $file != ".."){
               echo '<p><img src="'.$host.'/src/images/icons/closed_folder-512.png"><a href="'.$host.$uri.$file.'">'.$file.'</a></p>'."\n";
            }
            if (is_dir($urli.$file) && $file == "..") {
                echo '<p><a href="'.$host.$uri.$file.'"><img src="'.$host.'/src/images/icons/Go-back-icon.png"><a/></p>';
            }
            if(is_file($urli.$file)) {
                echo '<p><img src="'.$host.'/src/images/icons/'.getImage($file).'.png"><a href="'.$host.$uri.$file.'">'.$file.'</a></p>'."\n";
            }
        }
    }
}

function getTitle ($urli)
{
    $dirs = explode("/", substr($urli, 0, strlen($urli) - 1));
    $path = "/";
    echo '<a href="'.$path.'">~</a>';
    foreach($dirs as $dir){
    		$path .= $dir."/";
    		echo '/<a href="'.$path.'">'.$dir.'</a>';
    }
    echo "/";
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>~<?=$uri?></title>
    <style>
        img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php if(strripos($uri, ".htaccess") !== false): ?>
        <h1>403 FORBIDEN</h1>
    <?php else: ?>
        <h1><?php getTitle($urli); ?></h1>
	    <?php getFiles(scandir($urli), $uri, $host, $urli); ?>
    <?php endif; ?>
</body>
</html>
