<?php


$sql = "select * from Users"; //create query
$result = $connection->query($sql);//run the query on this connection

include_once  "dbconnection.php";

if ($result->num_rows> 0){
    while($row = $result-> fetch_assoc()){ //check if there is record in the result
        echo $row['id']." ".$row['username']." ".$row['password']. " ".$row['name']. "<br>"; // in each row,we have comumns.

    }
}else{
    echo "no result in the table";
}
$connection->close();
