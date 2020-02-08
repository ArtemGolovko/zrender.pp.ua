<?php
$products = explode(",", $_GET["add-to-cart"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-2.1.0.js"></script>
    <script src="./pay.js"></script>
    <p><?php
    $cost = 0;
    foreach($products as $product){
        if($product === "21455"){
            $cost += 11;
        } elseif($product === "23564"){
            $cost += 13;
        } elseif($product === "25427"){
            $cost += 15;
        } elseif($product === "22349"){
            $cost += 17;
        }
    }
    echo "It's all be cost ". $cost ."$!";
    ?></p>
    <button id="pay">Pay</button><br />
    <div id="hide" style="display: none;">
        <h3>Personal infomation</h3>
        <label for="email">Email:</label>
        <input type="email" id="email"><br />
        <label for="pass">Password:</label>
        <input type="password" id="pass"><br />
        <button id="check">Send</button>
    </div>
</body>
</html>
