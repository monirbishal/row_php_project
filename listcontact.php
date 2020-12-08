<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login_ok'])){
header('location: login.php');
}
$query_string ="SELECT * FROM contact";
$db_return = mysqli_query($db_connection, $query_string);

?>


<div class="col-md-12">
  <h3>All Contact</h3>
  <hr>
  <table class="table table-bordered" id="listcontact">
    <thead>

      <td>Contact Name</td>
      <td>Contact Detail</td>
      <td>Action</td>
    </thead>
    <?php

    foreach ($db_return as $contact){

    ?>
    <tr>


      <td><?=$contact['contact_name']?></td>
      <td><?=$contact['contact_detail']?></td>
      <td>

        <?php
        if($contact['status'] == 1){
        ?>

        <a href="makedeactivecontact.php?id=<?=$contact['id']?>" class="btn-sm btn-info">DeActive</a>

        <?php
      }
      else{
        ?>

        <a href="makeactivecontact.php?id=<?=$contact['id']?>" class="btn-sm btn-success">Active</a>

        <?php
        }
        ?>

      <a href="editcontact.php?id=<?=$contact['id']?>" class="btn-sm btn-warning">Edit</a>


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
  $('#listcontact').DataTable();
})

</script>
