<?php
session_start();
require_once('db.php');
require_once('includes/header.php');
if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$id = $_GET['id'];
$query_string ="SELECT * FROM banner1 WHERE id=$id";
$db_return = mysqli_query($db_connection, $query_string);
$after_assoc = mysqli_fetch_assoc($db_return);

?>

<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Add Banner</div>
				<div class="panel-body">
					<form role="form" action="editbannerpost.php" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Banner Name1" name="banner_name1" type="text" value="<?=$after_assoc['banner_name1']?>">
								<input class="form-control" placeholder="Banner Name2" name="banner_name2" type="text" value="<?=$after_assoc['banner_name2']?>">
								<input class="form-control" placeholder="Banner Name3" name="banner_name3" type="text" value="<?=$after_assoc['banner_name3']?>">
								<input class="form-control" name="banner_id" type="hidden" value="<?=$id?>">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="banner_detail1" rows="5"><?=$after_assoc['banner_detail1']?></textarea>
							</div>
              <div class="form-group">
								<textarea class="form-control" name="banner_detail2" rows="5"><?=$after_assoc['banner_detail2']?></textarea>
							</div>
              <div class="form-group">
								<textarea class="form-control" name="banner_detail3" rows="5"><?=$after_assoc['banner_detail3']?></textarea>
							</div>
              <div class="form-group">
								<textarea class="form-control" name="banner_detail4" rows="5"><?=$after_assoc['banner_detail4']?></textarea>
							</div>
							<input type="submit" name="submit" value="Edit Banner" class="btn btn-primary btn-block btn-lg">
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<?php
require_once('includes/footer.php');
?>
