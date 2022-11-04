
<?php
include './components/session.php';
?>
<?php
// Start the session
include 'db_connect.php';
$sql = "SELECT * FROM addstudent_tb where addmission='" . $_SESSION['addmission'] . "'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$a = $row['name'];
$b = $row['addmission'];
$c = $row['mobile'];
$d = $row['place'];
$e = $row['sex'];

?>


<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">       
<head>
	<?php
    include './components/links.php';
?>
</head>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns fixed-navbar">

<!-- navbar-fixed-top-->
		<?php
    include './components/header.php';
?>




<!-- main menu-->
		<?php
    include './components/menu.php';
?>
<!-- / main menu-->

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-body">
			<section id="basic-form-layouts">
				<div class="row match-height">
					<div class="col-xs-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title" id="basic-layout-form">My Profile</h4>
								<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i>
								</a>
								<div class="heading-elements">
								<ul class="list-inline mb-0">
									<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
									<li><a data-action="reload"><i class="icon-reload"></i></a></li>
									<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
									<li><a data-action="close"><i class="icon-cross2"></i></a></li>
								</ul>
								</div>
							</div>
							<table>
							<form class="form">
							<div class="card-body collapse in">
								<div class="card-block">
									<form class="form">
										<div class="form-body">
											<div class="row">
												<?php

?>
												<div class="col-md-12">
												<div class="form-group">
													<label for=""> Student Name</label>
													<input type="text" id="" class="form-control" placeholder="Student Name" name="name" autocomplete="off" value="<?php echo $a; ?>" readonly="yes">
													</div>
												</div>
													<div class="col-md-12">
													<div class="form-group">
													<label for="">Addmission Number</label>
													<input type="text" id="" class="form-control" placeholder="Addmission Number" name="addmission" autocomplete="off" value="<?php echo $b; ?>" readonly="yes">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
													<label for="">Phone Number</label>
													<input type="text" id="" class="form-control" placeholder="Enter Phone Number" name="mobile" autocomplete="off" value="<?php echo $c; ?>" readonly="yes">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
													<label for="">Place</label>
													<input type="text" id="" class="form-control" placeholder="Place" name="place" autocomplete="off" value="<?php echo $d; ?>" readonly="yes">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
													<label for="">Sex</label>
													<input type="text" id="" class="form-control" placeholder="Sex" name="sex" autocomplete="off" value="<?php echo $e; ?>" readonly="yes">
													</div>
												</div>
												
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>

	</div>
</div>
<!-- BEGIN VENDOR JS-->
<?php
include './components/scripts.php';
?>
</body>
</html>
