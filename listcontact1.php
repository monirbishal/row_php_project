<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login_ok'])){
header('location: login.php');
}
$query_string ="SELECT * FROM contact1";
$db_return = mysqli_query($db_connection, $query_string);

?>


<div class="col-md-12">
  <h3>All Contact1</h3>
  <hr>
  <table class="table table-bordered" id="listcontact1">
    <thead>

      <td>Contact1 Name</td>
      <td>Contact1 Detail1</td>
      <td>Contact1 Detail2</td>
      <td>Contact1 Detail3</td>
      <td>Action</td>
    </thead>
    <?php

    foreach ($db_return as $contact1){

    ?>
    <tr>


      <td><?=$contact1['contact1_name']?></td>
      <td><?=$contact1['contact1_detail1']?></td>
      <td><?=$contact1['contact1_detail2']?></td>
      <td><?=$contact1['contact1_detail3']?></td>
      <td>

        <?php
        if($contact1['status'] == 1){
        ?>

        <a href="makedeactivecontact1.php?id=<?=$contact1['id']?>" class="btn-sm btn-info">DeActive</a>

        <?php
      }
      else{
        ?>

        <a href="makeactivecontact1.php?id=<?=$contact1['id']?>" class="btn-sm btn-success">Active</a>

        <?php
        }
        ?>

      <a href="editcontact1.php?id=<?=$contact1['id']?>" class="btn-sm btn-warning">Edit</a>


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
  $('#listcontact1').DataTable();
})

</script>
