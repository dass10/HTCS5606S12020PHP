<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drop Down Menu</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php
    include_once "style.css";
    ?>
    <?php
    include_once "script.js";
    ?>

</head>
<body>
<div id = "nav">
    <ul>
        <li><a href="index.php" ><b>Home</b></a></li>
        <li><a href="shopbypet.php"><b>Shop by Pet</b></a></li>
        <li><a href= "storelocation.php"><b>Store Location</b></a></li>
        <li><a href="products.html" class="active"><b>Products</b></a></li>
        <li><a href="loginregister.php"><b>Log In/Register</b></a></li>
        <li><a href="checkout.html" class="active"><b>Checkout</b></a></li>
    </ul>
</div>
</body>
</html>
