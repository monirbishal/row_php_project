<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login_ok'])){
header('location: login.php');
}
$query_string ="SELECT * FROM socials";
$db_return = mysqli_query($db_connection, $query_string);

?>


<div class="col-md-12">
  <h3>All Social</h3>
  <hr>
  <table class="table table-bordered" id="listsocial">
    <thead>

      <td>Social Icon</td>
      <td>Social Link</td>
      <td>Action</td>
    </thead>
    <?php

    foreach ($db_return as $social){

    ?>
    <tr>


      <td><?=$social['social_icon']?></td>
      <td><?=$social['social_link']?></td>
      <td>

        <?php
        if($social['status'] == 1){
        ?>

        <a href="makedeactivesocial.php?id=<?=$social['id']?>" class="btn-sm btn-info">DeActive</a>

        <?php
      }
      else{
        ?>

        <a href="makeactivesocial.php?id=<?=$social['id']?>" class="btn-sm btn-success">Active</a>

        <?php
        }
        ?>

      <a href="editsocial.php?id=<?=$social['id']?>" class="btn-sm btn-warning">Edit</a>


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
  $('#listsocial').DataTable();
})

</script>
