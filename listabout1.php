<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login_ok'])){
header('location: login.php');
}
$query_string ="SELECT * FROM about1";
$db_return = mysqli_query($db_connection, $query_string);

?>


<div class="col-md-12">
  <h3>All About1</h3>
  <hr>
  <table class="table table-bordered" id="listabout1">
    <thead>

      <td>About1 Name</td>
      <td>Action</td>
    </thead>
    <?php

    foreach ($db_return as $about1){

    ?>
    <tr>


      <td><?=$about1['about1_name']?></td>
      <td>

        <?php
        if($about1['status'] == 1){
        ?>

        <a href="makedeactiveabout1.php?id=<?=$about1['id']?>" class="btn-sm btn-info">DeActive</a>

        <?php
      }
      else{
        ?>

        <a href="makeactiveabout1.php?id=<?=$about1['id']?>" class="btn-sm btn-success">Active</a>

        <?php
        }
        ?>

      <a href="editabout1.php?id=<?=$about1['id']?>" class="btn-sm btn-warning">Edit</a>


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
  $('#listabout1').DataTable();
})

</script>
