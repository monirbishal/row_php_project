<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login_ok'])){
header('location: login.php');
}
$query_string ="SELECT * FROM services1";
$db_return = mysqli_query($db_connection, $query_string);

?>


<div class="col-md-12">
  <h3>All Services1</h3>
  <hr>
  <table class="table table-bordered" id="listservice1">
    <thead>

      <td>Service Name1</td>
      <td>Service Detail1</td>
      <td>Service Photo1</td>
      <td>Action</td>
    </thead>
    <?php

    foreach ($db_return as $services1){

    ?>
    <tr>


      <td><?=$services1['service_name1']?></td>
      <td><?=$services1['service_detail1']?></td>
      <td><?=$services1['service_photo1']?></td>
      <td>

        <?php
        if($services1['status'] == 1){
        ?>

        <a href="makedeactiveservices1.php?id=<?=$services1['id']?>" class="btn-sm btn-info">DeActive</a>

        <?php
      }
      else{
        ?>

        <a href="makeactiveservices1.php?id=<?=$services1['id']?>" class="btn-sm btn-success">Active</a>

        <?php
        }
        ?>

      <a href="editservices1.php?id=<?=$services1['id']?>" class="btn-sm btn-warning">Edit</a>


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
  $('#listservice1').DataTable();
})

</script>
