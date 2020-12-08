<?php
require_once('db.php');

$testimonials_name = $_POST['testimonials_name'];
$testimonials_detail = $_POST['testimonials_detail'];
$testimonials_id = $_POST['testimonials_id'];


$query_string = "UPDATE testimonials SET testimonials_name='$testimonials_name', testimonials_detail='$testimonials_detail' WHERE id=$testimonials_id";
mysqli_query($db_connection, $query_string);
header('location: listtestimonials.php');

?>
