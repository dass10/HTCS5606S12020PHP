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

<?php
include_once "header.php";
?>
<div id="main">
    <div class="wrapper">

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



</body>
</html>
