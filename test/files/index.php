<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>------------------php-response--------------------------</p>
<?php
    if(isset($_POST["submit"])){
        if($_POST["form"] == "addfile")
        {
            /*$data = file_get_contents($_FILES['file']["tmp_name"], true);
            $file = fopen('./files/'.$_FILES['file']["name"], "w+");
            fwrite($file, $data);
            fclose($file);*/
            rename($_FILES['file']["tmp_name"], "./files/".$_FILES['file']["name"]);
        }
        if($_POST['form'] == "delfile")
        {
            $file_name = $_POST["file_name"];
            if(is_file("./files/".$file_name))
            {
                unlink("./files/".$file_name);
            } else {
                echo "404";
            }
        }
        if($_POST['form'] == "addtofile")
        {
            $file_name = $_POST["file_name"];
            $data = $_POST["data"];
            if(is_file("./files/".$file_name))
            {
                $file = fopen("./files/".$file_name, "a");
                fwrite($file, $data);
            } else {
                echo "404";
            }
        }
        if($_POST['form'] == "renamefile")
        {
            $file_name = $_POST["file_name"];
            $new_name = $_POST["new_file_name"];
            if(is_file("./files/".$file_name))
            {
                rename("./files/".$file_name, "./files/".$new_name);
            } else {
                echo "404";
            }
        }
    }
?>  
    <p>------------------------------------------------------------</p>
    <a href="./files">Files</a>
    <h1>Add new file or rewrite isset</h1>
    <form enctype="multipart/form-data" action="" method="post" accept-charset="UTF-8">
        <input type="hidden" name="form" value="addfile">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <input type="file" name="file" id="file" required>
        <input type="submit" name="submit">
    </form>
    <h1>Delete file</h1>
    <form action="" method="post">
        <input type="hidden" name="form" value="delfile">
        Delete file <input type="text" name="file_name" id="file_name" placeholder="File name" required>
        <input type="submit" name="submit">
    </form>
    <h1>Add some text to file</h1>
    <form action="" method="post">
        <input type="hidden" name="form" value="addtofile">
        Add to <input type="text" name="file_name" id="file_name" placeholder="file" required><br>
        <textarea name="data" id="data" placeholder="Some text"></textarea><br>
        <input type="submit" name="submit">
    </form>
    <h1>Rename file</h1>
    <form action="" method="post">
        <input type="hidden" name="form" value="renamefile">
        File: <input type="text" name="file_name" id="file_name" placeholder="file name" required><br>
        New name: <input type="text" name="new_file_name" id="new_file_name" placeholder="example.txt" required><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>