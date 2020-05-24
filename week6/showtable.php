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