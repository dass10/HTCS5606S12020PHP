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
session_start();//either you use session or set session,you must have session
$username = $_SESSION["username"]; //use session

$sql = "select password from Users where username='username'";
$result = $connection->query($sql);
if ($result-> num_rows == 1){
    while ($row = $result->fetch_assoc()) {
        $oldPwdInDb = $row["password"];
    }
}

if(isset($_POST['oldpwd'])) { //isset check variable exist or not
    if ($_POST["oldpwd"] == $oldPwdInDb) {
        $sql = "update Users set password = '";
        $sql .= $_POST["newpwd"];
        $sql .= "'where username = '$username'";
        $sql .= $connection->query($sql);
        echo "password changed";

    } else {
        echo "go back,input again";
    }
}
?>
<p><a href="logout.php">logout</a></p>