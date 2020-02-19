<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-2.1.0.js"></script>
</head>
<body>
    <?php if(empty($_COOKIE['user'])): ?>
    <script>
        $(document).ready(function () {
            $('form').submit(function (e) { 
                e.preventDefault();
                $.ajax({
                    type: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (result){
                        if(result === "reload"){
                            window.location.reload();
                        }
                    }
                });
            });
        });
    </script>
    <h1>Sing up</h1>
    <form action="adduser.php" method="post">
        <input type="text" name="login" minlength="4" maxlength="100" required><br />
        <input type="email" name="email" minlength="4" maxlength="50" required><br />
        <input type="password" name="pass" minlength="4" maxlength="32" required><br />
        <input type="submit" value="send">
    </form>
    <h1>Log in</h1>
    <form action="logaccess.php" method="post">
        <input type="text" name="login" minlength="4" maxlength="100" required><br />
        <input type="email" name="email" minlength="4" maxlength="50" required><br />
        <input type="password" name="pass" minlength="4" maxlength="32" required><br />
        <input type="submit" value="send">
    </form>
    <?php else: ?>
    <p><?=$_COOKIE['user']?> click <a href="log-out.php">here</a> to log out.</p>
    <?php endif; ?>
</body>
</html>