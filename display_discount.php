<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_REQUEST['description'];
    $price = $_REQUEST['price'];
    $discountPercent = $_REQUEST['discount_percent'];

    $discountAmount = $price * $discountPercent /100;
    $discountPrice = $price - $discountAmount;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="content">
    <h2>Product Discount Calculator</h2>
    <form method="post">
        <label>Product Description: </label>
        <span><?php echo $description; ?></span>
        <br>
        <label>Price: </label>
        <span><?php echo $price . "$"; ?></span>
        <br>
        <label>Discount Percent: </label>
        <span><?php echo $discountPercent . "%"; ?></span>
        <br>
        <label>Discount Amount: </label>
        <span><?php echo $discountAmount . "$"; ?></span>
        <br>
        <label>Discount Price: </label>
        <span><?php echo $discountPrice . "$"; ?></span>
        <br>
</div>
</form>
</body>
</html>
