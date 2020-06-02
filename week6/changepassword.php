<?php

session_start();//either you use session or set session,you must have session
$username = $_SESSION["username"]; //use session
$oldPwd = $_POST["oldpwd"];
$newPwd = $_POST["newpwd"];

if (changepassword($username, $oldPwd, $newPwd)){
        echo "Password changed";
}else{
    echo "Password not changed";


}
?>
<p><a href="logout.php">logout</a></p>