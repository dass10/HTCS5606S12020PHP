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

    include_once  "dbconnection.php";


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

