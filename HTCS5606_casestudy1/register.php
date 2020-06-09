<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>log in/Register</title>
    <script src="JS/script.js"></script>
    <link rel="stylesheet" href="CSS/style.css">
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>

</head>
<body>

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
