<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drop Down Menu</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="JS/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



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
   <!-- <div class="level1">
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


</div>-->
    <?php
    include_once "class/User.php";
    $user = new User(null, "", "", "");
    $categories = $user->viewCategories();
    $i = 0;
    while ($i <sizeof($categories)){
        echo  "<a href='products.htmlcategoryID=".$category->id."'>".$category->name.</a>";
        $i = $i + 1;
    }
    ?>

</body>
</html>
