<?php
include_once "dbconnection.php";
$records = showRecords();
//print_r($records);

$i = 0;
while ($i <sizeof($records)){
    // print_r($records[$i]; //arrayname[index] --> value
    $record = $records[$i]; //inside each record,we have place 0 for id, place 1 for username,place 2 for passowrd,
    ?>
    <p><?php  $record->id; ?>
    <?php echo $record->getUsername(); ?>
    <?php echo $record->getpassword(); ?>
    <?php echo $record->name; ?>
</p>
<?php
    $i = $i + 1;
}