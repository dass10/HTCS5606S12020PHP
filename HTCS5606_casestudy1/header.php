


<div id="header">
    <div class="topnav">
        <a href="products.php"> <img src="image/checkout.png" height="50" width="50" /></a>
        <input type="text" placeholder="Search..">
    </div>

    <h3><img src="image/logo.png" height="50" width="50"/><br>
        The Pet Meal
    </h3>

<div id="nav">
    <div class="level1">
        <a href="index.php">Home</a>
    </div>
    <div class="level1">
        <a href="shopbypet.php" class="topItem">Shop By Pet</a>
        <div class="level2">
            <?php
            include_once "class/User.php";
            $user = new User(null, "", "", "");
            $categories = $user->viewCategories();
            $i = 0;
            while ($i < sizeof($categories)){
                $category = $categories[$i];
                echo "<p><a href='products.php?categoryID=".$category->id."'>".$category->name."</a></p>";
                $i = $i + 1;
            }
            ?>
        </div>
    </div>
    <div class="level1">
        <a href="storelocation.php">Store Location</a>
    </div>
    <div class="level1">
        <a href="products.php">Products</a>
    </div>

    <div class="level1">
        <a href="loginregister.php">Log In/Register</a>
    </div>
    <div class="level1">
        <a href="checkout.php">Checkout</a>
    </div>



</div>

