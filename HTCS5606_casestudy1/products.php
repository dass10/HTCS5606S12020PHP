<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="CSS/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/script.js"></script>
</head>
<body>
<div id="header">
    <h3><img src="image/logo.png" height="50" width="50"/><br>
        The Pet Meal
    </h3>
</div>
<?php
include_once "header.php";
?>
<div id="main">
    <div class="wrapper">
        <h1>CAT FOOD </h1>
        <div class="items">
            <?php
//            include_once "class/User.php";
//            $user = new User(null, "", "", "");
            $categoryID = $_GET["categoryID"];
            $products = $user->showProductsByCategory($categoryID);
            $i = 0;
            while ($i < sizeof($products)) {
                $product = $products[$i];
                ?>
                <div class="item">
                    <img src="image/<?php echo $product->image; ?>" height="150" width="150"/>
                    <br>
                    <h2><?php echo $product->description; ?></h2>
                    <p>PRICE: $<?php echo $product->price; ?></p> Qty:<input class="qty" id="parrotfdQty" type="number">
                    <button name="<?php echo $product->description; ?>"
                            price = "<?php echo $product->price; ?>" class="add-to-cart" type="button" onclick="addToCart(this)">ADD TO CART</button>
                </div>
                <?php
                $i = $i + 1;
            }
            ?>
        </div>
    </div>

</div>
<div id="rightside">
    <p>Cart:</p>
    <div id="cartDiv"></div>
    <button onclick="invoice()" id="showInvoiceBut">Invoice</button>
</div>

<div id="myModal" class="modal">

    <!-- Invoice content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id = "invoicePlace">Invoice</div>
    </div>

</div>


<div class="footer">
    <div class="inner-footer">
        <div class="footer-items">
            <h1>Help</h1>
            <p>Shipping</p>
            <p>Privacy Policy</p>
            <p>Terms & Conditions</p>
            <p>Return & Exchange</p>
        </div>
        <div class="footer-items">
            <h1>Company Info</h1>
            <p>About us</p>
            <p>FAQ</p>
            <p>Contact us</p>
        </div>

        <div class="footer-items">
            <h1>Connect With us</h1>

            <a href="https://www.instagram.com/"><img src="image/insta.jpg" height="50" width="50"/></a>

            <a href="https://twitter.com/"><img src="image/twitter.jpg" height="50" width="50"/></a>

            <a href="https://www.facebook.com/"><img src="image/fb.jpg" height="50" width="50"/><br><br></a>

            <img src="image/call us.jpg"  height="50" width="50" /> +64220440190


        </div>

        <div class="footer-items">
            <h1>Join our NewsLetter</h1>
            <p>Be the first to Hear about our New Arrivals and Special Deals</p>
            <img src="image/sign up.png" height="270" width="270"/>
        </div>
    </div>
</div>

</body>
</html>
