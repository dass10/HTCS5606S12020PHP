<?php
include_once  "dbconnection.php";

session_start();
$username = $_SESSION["username"];

showprofile($username); //call the function name


?>
<p><a href="logout.php">logout</a></p>
