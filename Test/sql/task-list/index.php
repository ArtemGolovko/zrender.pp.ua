<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-2.1.0.js"></script>
</head>
<body>
    <form action="add.php" method="post">
        <input type="text" name="task" required>
        <input type="submit" value="send">
    </form>
    <ul>
    <?php
        $dns = 'mysql:host=localhost;dbname=zrender';
        $pdo = new PDO($dns, 'zrender', '7dBWFPVx');
        $query = $pdo->query('SELECT * FROM `test-tasks`');
        while($row = $query->fetch(PDO::FETCH_OBG)){
            echo '<li>'.$row->task.'<button class="del" id="'.$row->id.'">del</button></li>'
        }
    ?>
    </ul>
</body>
</html>