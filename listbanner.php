<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login_ok'])){
header('location: login.php');
}
$query_string ="SELECT * FROM banner1";
$db_return = mysqli_query($db_connection, $query_string);

?>


<div class="col-md-12">
  <h3>All Banner</h3>
  <hr>
  <table class="table table-bordered" id="listbanner">
    <thead>

      <td>Banner Name1</td>
      <td>Banner Name2</td>
      <td>Banner Name3</td>
      <td>Banner Detail1</td>
      <td>Banner Detail2</td>
      <td>Banner Detail3</td>
      <td>Banner Detail4</td>
      <td>Action</td>
    </thead>
    <?php

    foreach ($db_return as $banner){

    ?>
    <tr>


      <td><?=$banner['banner_name1']?></td>
      <td><?=$banner['banner_name2']?></td>
      <td><?=$banner['banner_name3']?></td>
      <td><?=$banner['banner_detail1']?></td>
      <td><?=$banner['banner_detail2']?></td>
      <td><?=$banner['banner_detail3']?></td>
      <td><?=$banner['banner_detail4']?></td>
      <td>

        <?php
        if($banner['status'] == 1){
        ?>

        <a href="makedeactivebanner.php?id=<?=$banner['id']?>" class="btn-sm btn-info">DeActive</a>

        <?php
      }
      else{
        ?>

        <a href="makeactivebanner.php?id=<?=$banner['id']?>" class="btn-sm btn-success">Active</a>

        <?php
        }
        ?>

      <a href="editbanner.php?id=<?=$banner['id']?>" class="btn-sm btn-warning">Edit</a>


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
  $('#listbanner').DataTable();
})

</script>
