<?php
session_start();
require_once('db.php');
require_once('includes/header.php');
if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$id = $_GET['id'];
$query_string ="SELECT * FROM socials WHERE id=$id";
$db_return = mysqli_query($db_connection, $query_string);
$after_assoc = mysqli_fetch_assoc($db_return);

?>

<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Add Socials</div>
				<div class="panel-body">
					<form role="form" action="editsocialpost.php" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Social Icon" name="social_icon" type="text" value="<?=$after_assoc['social_icon']?>">
								<input class="form-control" placeholder="Social Link" name="social_link" type="text" value="<?=$after_assoc['social_link']?>">
								<input class="form-control" name="social_id" type="hidden" value="<?=$id?>">
							</div>

							<input type="submit" name="submit" value="Edit Social" class="btn btn-primary btn-block btn-lg">
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<?php
require_once('includes/footer.php');
?>
