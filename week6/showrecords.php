<?php
$server = "m7nj9dclezfq7ax1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "sp8kxui59yxqk3uy";
$pwd = "vfb198mevrvl8nl7";
$database = "b1m6lvq858bqg11k";

$connection = new mysqli($server, $user, $pwd, $database);
if ($connection->connect_error){
    echo  $connection->connect_error;
}else{
    echo "Connection Created";
}

$sql = "select * from Users"; //create query
$result = $connection->query($sql);//run the query on this connection

if ($result->num_rows> 0){
    while($row = $result-> fetch_assoc()){ //check if there is record in the result
        echo $row['id']." ".$row['username']." ".$row['password']. " ".$row['name']. "<br>"; // in each row,we have comumns.

    }
}else{
    echo "no result in the table";
}
$connection->close();
