<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login_ok'])){
header('location: login.php');
}
$query_string ="SELECT * FROM testimonials";
$db_return = mysqli_query($db_connection, $query_string);

?>


<div class="col-md-12">
  <h3>All Testimonials</h3>
  <hr>
  <table class="table table-bordered" id="listtestimonials">
    <thead>

      <td>Testimonials Name</td>
      <td>Testimonials Detail</td>
      <td>Testimonials Photo</td>
      <td>Action</td>
    </thead>
    <?php

    foreach ($db_return as $testimonials){

    ?>
    <tr>


      <td><?=$testimonials['testimonials_name']?></td>
      <td><?=$testimonials['testimonials_detail']?></td>
      <td><?=$testimonials['testimonials_photo']?></td>
      <td>

        <?php
        if($testimonials['status'] == 1){
        ?>

        <a href="makedeactivetestimonials.php?id=<?=$testimonials['id']?>" class="btn-sm btn-info">DeActive</a>

        <?php
      }
      else{
        ?>

        <a href="makeactivetestimonials.php?id=<?=$testimonials['id']?>" class="btn-sm btn-success">Active</a>

        <?php
        }
        ?>

      <a href="edittestimonials.php?id=<?=$testimonials['id']?>" class="btn-sm btn-warning">Edit</a>


      </td>
    </tr>
    <?php

    }
    ?>
  </table>
</div>

<?php
 require_once('includes/footer.php');
?>

<script type="text/javascript">

$(document).ready(function(){
  $('#listtestimonials').DataTable();
})

</script>
