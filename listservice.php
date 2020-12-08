<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login_ok'])){
header('location: login.php');
}
$query_string ="SELECT * FROM services";
$db_return = mysqli_query($db_connection, $query_string);

?>


<div class="col-md-12">
  <h3>All Services</h3>
  <hr>
  <table class="table table-bordered" id="listservice">
    <thead>

      <td>Service Name</td>
      <td>Service Detail</td>
      <td>Service Photo</td>
      <td>Action</td>
    </thead>
    <?php

    foreach ($db_return as $services){

    ?>
    <tr>


      <td><?=$services['service_name']?></td>
      <td><?=$services['service_detail']?></td>
      <td>
        <img src="servicepicture/<?=$services['service_photo']?>" ,alt="not found", width="75">
      </td>

      <td>

        <?php
        if($services['status'] == 1){
        ?>

        <a href="makedeactive.php?id=<?=$services['id']?>" class="btn-sm btn-info">DeActive</a>

        <?php
      }
      else{
        ?>

        <a href="makeactive.php?id=<?=$services['id']?>" class="btn-sm btn-success">Active</a>

        <?php
        }
        ?>

      <a href="serviceedit.php?id=<?=$services['id']?>" class="btn-sm btn-warning">Edit</a>


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
  $('#listservice').DataTable();
})

</script>
