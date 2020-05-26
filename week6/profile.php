<?php
$server = "m7nj9dclezfq7ax1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "sp8kxui59yxqk3uy";
$pwd = "vfb198mevrvl8nl7";
$database = "b1m6lvq858bqg11k";

$connection = new mysqli($server, $user, $pwd, $database);
if ($connection->connect_error) {
    echo $connection->connect_error;
} else {
    echo "Connection Created";
}
session_start();
$username = $_SESSION["username"];

$sql = "select * from Users where username= '$username'";
$result = $connection->query($sql);
if ($result-> num_rows == 1){
    while ($row = $result->fetch_assoc()){
        echo "<p>".$row["id"]."<p>";
        echo "<p>".$row["username"]."<p>";
        echo "<p>".$row["password"]."<p>";
        echo "<p>".$row["name"]."<p>";
    }
}
?>
<p><a href="logout.php">logout</a></p>
