<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drop Down Menu</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>$(document).ready(function () {
        $(".topItem").mouseenter(function () {

            $(this).next().css("display", "block");
        });
        $(".level1").mouseleave(function () {
            // I don't care this divider has children divider (class: level2) or not,
            // if it has level2 divider, when my mouse left, I hide this divider.
            $(this).children("div").hide();
        });
    });
</script>
    <?php
    include_once "style.css";
    ?>

</head>
<body>
<div id="nav">
    <div class="level1">
        <a href="index.php">Home</a>
    </div>
    <div class="level1">
        <a href="shopbypet.php" class="topItem">Shop By Pet</a>
        <div class="level2">
            <p><a href="#">Dog Food</a></p>
            <p><a href="#">Cat Food</a></p>
            <p><a href="#">Bird Food</a></p>
            <p><a href="#">Small Animal Food</a></p>
            <p><a href="#">Hen Food</a></p>
            <p><a href="#">Fish Food</a></p>
        </div>
    </div>
    <div class="level1">
        <a href="storelocation.php">Store Location</a>
    </div>
    <div class="level1">
        <a href="products.html">Products</a>
    </div>
    <div class="level1">
        <a href="loginregister.php">Log In/Register</a>
    </div>
    <div class="level1">
        <a href="checkout.php">Checkout</a>
    </div>


</div>

</body>
</html>
