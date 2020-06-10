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
<!--Footer-->
    <?php
    include_once "footer.php";
    ?>

</body>
</html>