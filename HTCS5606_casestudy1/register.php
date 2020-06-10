<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>log in/Register</title>
    <script src="JS/script.js"></script>
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
<div id="header">
    <div class="topnav">
        <img src="image/checkout.png" height="50" width="50"/>
        <input type="text" placeholder="Search..">
    </div>

    <h3><img src="image/logo.png" height="70" width="70"/><br>
        The Pet Meal
    </h3>
    <?php
    include_once "header.php";
    ?>
<div id="main">
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>


            <form id="register" class="input-group">
                <input type="text" class="input-field" placeholder="First Name"
                       required>
                <input type="text" class="input-field" placeholder="Last Name"
                       required>
                <input type="text" class="input-field" placeholder="Address"
                       required>
                <input type="text" class="input-field" placeholder="Phone No"
                       required>
                <input type="text" class="input-field" placeholder="User Id"
                       required>
                <input type="email" class="input-field" placeholder="Email Id"
                       required>
                <input type="text" class="input-field" placeholder="Enter Password"
                       required>

                <input type="checkbox" class="check-box"><span>I agree to the terms & condition</span>
                <button type="submit" class="submit-btn">Create My Account</button>
            </form>


        </div>


    </div>
</div>
<!--Footer-->
    <?php
    include_once "footer.php";
    ?>

</body>
</html>
