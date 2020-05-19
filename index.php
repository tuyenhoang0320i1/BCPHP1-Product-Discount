<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<body>
<div id="content">
    <h2>Product Discount Calculator</h2>
    <form action="display_discount.php" method="post">
        <div id="data">
            <label>Product Description: </label>
            <input type="text" name="description">
            <br>
            <label>List Price: </label>
            <input type="text" name="price">
            <br>
            <label>Discount Percent: </label>
            <input type="text" name="discount_percent">
            (%)
            <br>
            <div id="button">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount">
            </div>
        </div>

    </form>
</div>
</body>
</html>
