<?php
require_once('db.php');

$contact1_name = $_POST['contact1_name'];
$contact1_detail1 = $_POST['contact1_detail1'];
$contact1_detail2 = $_POST['contact1_detail2'];
$contact1_detail3 = $_POST['contact1_detail3'];
$contact1_id = $_POST['contact1_id'];


$query_string = "UPDATE contact1 SET contact1_name='$contact1_name', contact1_detail1='$contact1_detail1', contact1_detail2='$contact1_detail2', contact1_detail3='$contact1_detail3' WHERE id=$contact1_id";
mysqli_query($db_connection, $query_string);
header('location: listcontact1.php');

?>
