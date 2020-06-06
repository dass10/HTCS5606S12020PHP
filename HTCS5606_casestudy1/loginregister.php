<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>log in</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="JS/script.js"></script>

</head>
<body>



<div id="header">
    <div class="topnav">

        <input type="text" placeholder="Search..">
    </div>


    <h3><img src="image/logo.png" height="50" width="50"/><br>
        The Pet Meal
    </h3>

    <?php
    include_once "header.php";
    ?>



<div id="main">


    <div class="hero" >
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">
                    Register </button>
            </div>

            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="User Id"
                       required>
                <input type="text" class="input-field" placeholder="Enter Password"
                       required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>





        </div>



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


            <img src="image/call us.jpg" height="50" width="50"/> +64220440190


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