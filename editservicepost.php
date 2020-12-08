<?php
require_once('db.php');

$service_name = $_POST['service_name'];
$service_detail = $_POST['service_detail'];
$service_id = $_POST['service_id'];




if (!empty($_FILES['service_photo']['name'])){

$query_string_checkphotoname = "SELECT * FROM services WHERE id=$service_id";
$info_from_db = mysqli_query($db_connection, $query_string_checkphotoname);
$afterassoc = mysqli_fetch_assoc($info_from_db);
if($afterassoc['service_photo'] != 'service_default_photo.jpg'){

  $photo_path_todelete = "servicepicture/".$afterassoc['service_photo'];
  unlink($photo_path_todelete);
}

$uploaded_image = $_FILES['service_photo'];
  $afterexplode = explode('.', $uploaded_image['name']);
  $extension = $afterexplode[1];
  $allowed_format = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');
  if(in_array($extension, $allowed_format)){
    if($uploaded_image['size'] <= 5000000){
      $id = $afterassoc['id'];
      $newfilename = $id.'.'.$extension;
      $newpicturelocation = 'servicepicture/'.$newfilename;
      move_uploaded_file($uploaded_image['tmp_name'], $newpicturelocation);
      $query_forpicture = "UPDATE services SET service_photo = '$newfilename' WHERE id = $id";
      mysqli_query($db_connection, $query_forpicture);
      header('location: listservice.php');

    }
    else{
      echo "You cant upload a file more than 5 MB";
    }
  }
  else{
    echo "This format is not allowed";
  }


}


$query_string = "UPDATE services SET service_name='$service_name', service_detail='$service_detail' WHERE id=$service_id";
mysqli_query($db_connection, $query_string);
header('location: listservice.php');

?>
