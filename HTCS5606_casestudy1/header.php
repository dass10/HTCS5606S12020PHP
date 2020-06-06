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

<div id="nav">
    <div class="level1">
        <a href="index.php">Home</a>
    </div>
    <div class="level1">
        <a href="shopbypet.php" class="topItem">Shop by Pet</a>
        <div class="level2">
            <p><a href="#">Dog Food </a></p>
            <p><a href="#">Cat Food</a></p>
            <p><a href="#">Bird Food</a></p>
            <p><a href="#">Hen Food  </a></p>
            <p><a href="#">Small Animal Food</a></p>
            <p><a href="#">Fish Food</a></p>
        </div>
    </div>
    <div class="level1">
        <a href="storelocation.php" class="topItem">Store Location</a>
        <div class="level2">
            <p><a href="#">item 4</a></p>
            <p><a href="#">item 5</a></p>
            <p><a href="#">item 6</a></p>
        </div>
    </div>
    <div class="level1">
        <a href="products.html">Products</a>
    </div>
    <div class="level1">
        <a href="loginregister.php">Log In/Register</a>
    </div>
    <div class="level1">
        <a href="checkout.html">Checkout</a>
    </div>
</div>

</body>
</html>
