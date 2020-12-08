<?php
require_once('db.php');

$social_icon = $_POST['social_icon'];
$social_link = $_POST['social_link'];
$social_id = $_POST['social_id'];


$query_string = "UPDATE socials SET social_icon='$social_icon', social_link='$social_link' WHERE id=$social_id";
mysqli_query($db_connection, $query_string);
header('location: listsocial.php');

?>
