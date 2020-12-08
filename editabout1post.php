<?php
require_once('db.php');

$about1_name = $_POST['about1_name'];
$about1_id = $_POST['about1_id'];


$query_string = "UPDATE about1 SET about1_name='$about1_name' WHERE id=$about1_id";
mysqli_query($db_connection, $query_string);
header('location: listabout1.php');

?>
