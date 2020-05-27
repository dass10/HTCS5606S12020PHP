<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show my records</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Name</th>
    </tr>
    <?php

    $sql = "select * from Users"; //create query
    $result = $connection->query($sql);//run the query on this connection

    include_once  "dbconnection.php";

    if ($result->num_rows> 0){
        while($row = $result-> fetch_assoc()){ //check if there is record in the result
            echo "<tr>";
           echo "<td>".$row['id']."</td>";
           echo "<td>".$row['username']."</td>";
           echo "<td>".$row['password']. "</td>";
           echo "<td>".$row['name']. "</td>";
            echo "</tr>";

        }
    }else{
        echo "no result in the table";
    }
    ?>
</table>

</body>
</html>