<?php
$username = $_POST["username"];
$password = $_POST["password"];
$server = "m7nj9dclezfq7ax1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "sp8kxui59yxqk3uy";
$pwd = "vfb198mevrvl8nl7";
$database = "b1m6lvq858bqg11k";
/**
 * name dbconn
 * @return mysqli a connection
 */

function dbconn(){
    $connection = new mysqli($GLOBALS['server'], $GLOBALS['user'], $GLOBALS['pwd'], $GLOBALS['database']); //create database connection
    if ($connection->connect_error) {
        echo $connection->connect_error;
    } else {
        return $connection; //return database connection out
    }
}


/**
 * @name login
 * @param $username
 * @param $password
 * @return bool //login or not
 */
function login($username, $password){
//    return true/false return give result back and jump out from this function. Any code after return won't be run
    $conn = dbconn(); //create database connection from function dbconn()
    $sql = "select * from Users where username = '$username'"; //this is our query
    $result = $conn->query($sql); //run query on the created connection through method query()
    if ($result->num_rows == 1){ // means user exist in our database
        while ($row = $result->fetch_assoc()){
            if ($row["password"] == $password){ //check password
                $conn->close();
                echo "db connection closed before return";
                return true; //login
                echo "db connection closed after return";
            }else{ //username is correct, check password
                $conn->close();
                return false; // cannot login
            }
        }
    } else{ //for username
        $conn->close();
        return false; // cannot login
    }
}

/**
 * @name showprofile
 * @param $username
 */
function showprofile($username) {//this function has no return
    $conn = dbconn();
    $sql = "select * from Users where username= '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . $row["id"] . "<p>";
            echo "<p>" . $row["username"] . "<p>";
            echo "<p>" . $row["password"] . "<p>";
            echo "<p>" . $row["name"] . "<p>";
            $conn->close();
        }
    }
}

