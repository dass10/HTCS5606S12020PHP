<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drop Down Menu</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php
    include_once "style.css";
    ?>
    <?php
    include_once "script.js";
    ?>

</head>
<body>

<div id="nav">
    <div class="level1">
        <a href="#">one level</a>
    </div>
    <div class="level1">
        <a href="#" class="topItem">two levels</a>
        <div class="level2">
            <p><a href="#">item 1</a></p>
            <p><a href="#">item 2</a></p>
            <p><a href="#">item 3</a></p>
        </div>
    </div>
    <div class="level1">
        <a href="#" class="topItem">two levels</a>
        <div class="level2">
            <p><a href="#">item 4</a></p>
            <p><a href="#">item 5</a></p>
            <p><a href="#">item 6</a></p>
        </div>
    </div>
</div>

</body>
</html>
