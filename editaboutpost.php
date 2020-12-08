<?php
require_once('db.php');

$about_name = $_POST['about_name'];
$about_name1 = $_POST['about_name1'];
$about_detail = $_POST['about_detail'];
$about_id = $_POST['about_id'];


$query_string = "UPDATE about SET about_name='$about_name', about_name1='$about_name1', about_detail='$about_detail' WHERE id=$about_id";
mysqli_query($db_connection, $query_string);
header('location: listabout.php');

?>
