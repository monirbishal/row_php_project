<?php
require_once('db.php');

$contact_name = $_POST['contact_name'];
$contact_detail = $_POST['contact_detail'];
$contact_id = $_POST['contact_id'];


$query_string = "UPDATE contact SET contact_name='$contact_name', contact_detail='$contact_detail' WHERE id=$contact_id";
mysqli_query($db_connection, $query_string);
header('location: listcontact.php');

?>
