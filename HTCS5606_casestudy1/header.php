<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drop Down Menu</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



</head>
<body>
<?php
include_once "style.css";
?>

<?php
include_once "script.js";
?>

<div id="nav">
    <div class="level1">
        <a href="#">one level</a>
    </div>
    <div class="level1">
        <a href="#" class="topItem">two levels</a>
        <div class="level2">
            <p><a href="#">Dog Food</a></p>
            <p><a href="#">Cat Food</a></p>
            <p><a href="#">Bird Food</a></p>
            <p><a href="#">Small Animal Food</a></p>
            <p><a href="#">Hen Food</a></p>
            <p><a href="#">Fish Food</a></p>
        </div>
    </div>
</div>

</body>
</html>
