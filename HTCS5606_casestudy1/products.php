<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shweta Assessment 1 Home page</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="JS/script.js"></script>

</head>
<body id="page2">
<div id="header">
    <div class="topnav">
        <img src="image/checkout.png" height="50" width="50"/>
        <input type="text" placeholder="Search..">

    </div>

    <h3><img src="image/logo.png" height="50" width="50"/><br>
        The Pet Meal
    </h3>
    <?php
    include_once "header.php";
    ?>
    <div id="main">
        <div class="wrapper">
            <h1>CAT FOOD </h1>
            <span><i class="shoping-cart"></i></span>
            <div class="clear"></div>
            <div class="items">
                <div class="item">
                    <img src="image/DryCat%20Food1.jpeg" height="150" width="150"/>
                    <br>
                    <h2>Adult Oral Care Dry Cat Food<br>Available in 2Kg and 4Kg</h2>
                    <p>PRICE: $47.99 - $86.99</p>
                    <button class="add-to-cart" type="button">ADD TO CART</button>
                </div>

    <!--Footer-->
    <?php
    include_once "footer.php";
    ?>
</body>
</html>
