<?php
require_once('db.php');

$banner_name1 = $_POST['banner_name1'];
$banner_name2 = $_POST['banner_name2'];
$banner_name3 = $_POST['banner_name3'];
$banner_detail1 = $_POST['banner_detail1'];
$banner_detail2 = $_POST['banner_detail2'];
$banner_detail3 = $_POST['banner_detail3'];
$banner_detail4 = $_POST['banner_detail4'];
$banner_id = $_POST['banner_id'];


$query_string = "UPDATE banner1 SET banner_name1='$banner_name1', banner_name2='$banner_name2', banner_name3='$banner_name3', banner_detail1='$banner_detail1', banner_detail2='$banner_detail2', banner_detail3='$banner_detail3', banner_detail4='$banner_detail4' WHERE id=$banner_id";
mysqli_query($db_connection, $query_string);
header('location: listbanner.php');

?>
