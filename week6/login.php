<?php
/**
 * Author: Shweta Das
 * Date: 26 May 2020
 * Version: 1.0
 * Purpose: for login
 */

if (isset($_POST["username"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
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
    //is the username in my table
    $sql = "select * from Users  where username = '$username'"; // this is our query
    echo $sql;
    $result = $connection->query($sql);//run query on this connection through method query()
    if ($result->num_rows == 1) { //mean user exist in our database

        while ($row = $result->fetch_assoc()) {
            if ($row["password"] == $password) { //check password
                echo "access granted";
                session_start();
                $_SESSION["username"] = $username;

                //if login we allow user to do something
                ?>
                <p><a href="profile.php">profile</a> </p>
                <p><a href="changepasswordform.php">change password</a> </p>
                <?php
            } else {
                echo "wrong password";
            }
            $connection->close();//close my connection

        }

    } else {
        echo "wrong username";
    }
}else{
    ?>
<script>window.open("loginform.html",);</script>// go to login form
<?php
}

