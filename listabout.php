<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login_ok'])){
header('location: login.php');
}
$query_string ="SELECT * FROM about";
$db_return = mysqli_query($db_connection, $query_string);

?>


<div class="col-md-12">
  <h3>All About</h3>
  <hr>
  <table class="table table-bordered" id="listabout">
    <thead>

      <td>About Name</td>
      <td>About Name1</td>
      <td>About Detail</td>
      <td>About Photo</td>
      <td>Action</td>
    </thead>
    <?php

    foreach ($db_return as $about){

    ?>
    <tr>


      <td><?=$about['about_name']?></td>
      <td><?=$about['about_name1']?></td>
      <td><?=$about['about_detail']?></td>
      <td><?=$about['about_photo']?></td>
      <td>

        <?php
        if($about['status'] == 1){
        ?>

        <a href="makedeactiveabout.php?id=<?=$about['id']?>" class="btn-sm btn-info">DeActive</a>

        <?php
      }
      else{
        ?>

        <a href="makeactiveabout.php?id=<?=$about['id']?>" class="btn-sm btn-success">Active</a>

        <?php
        }
        ?>

      <a href="editabout.php?id=<?=$about['id']?>" class="btn-sm btn-warning">Edit</a>


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
  $('#listabout').DataTable();
})

</script>
