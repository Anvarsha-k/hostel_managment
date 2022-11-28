<?php
include("./components/session.php");
?>
<?php
include 'db_connect.php';
// Create database connection

// Initialize message variable
$msg = '';

// If upload button is clicked ...
if (isset($_POST['upload'])) {
	$a = mysqli_real_escape_string($conn, $_POST['name']);

	$b = mysqli_real_escape_string($conn, $_POST['username']);

	$c = mysqli_real_escape_string($conn, $_POST['password']);
	$d = mysqli_real_escape_string($conn, $_POST['mobile']);
	$e = mysqli_real_escape_string($conn, $_POST['place']);
	$f = mysqli_real_escape_string($conn, $_POST['sex']);


	$sql = "INSERT INTO addwarden_tb (name,username,password,mobile,place,sex) VALUES ('$a','$b','$c','$d','$e','$f')";
	if (mysqli_query($conn, $sql)) {
		$_GET['status'] = "New Warden Added";
		$_GET['error'] = false;
	} else {
		$_GET['error'] = true;
		$_GET['status'] = "Cannnot add warden right now";
	}
}
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<head>
	<?php
	include("./components/links.php");
	?>

</head>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns fixed-navbar">
	<!-- navbar-fixed-top-->
	<?php
	include("./components/header.php");
	?>
	<!--//// navbar-fixed-top-->
	<!-- main menu-->
	<?php
	include("./components/menu.php");
	?>

	<!-- / main menu-->

	<div class="app-content content container-fluid">
		<div class="content-wrapper">
			<div class="content-header row">
				<div class="content-header-left col-md-6 col-xs-12 mb-1">
					<h2 class="content-header-title">Warden</h2>
				</div>

				<div class="content-body">

					<section id="basic-form-layouts">
						<div class="row match-height">
							<div class="col-xs-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title" id="basic-layout-form">Add Warden</h4>
										<a class="heading-elements-toggle"><i class="icon-multipart/form-dataellipsis font-medium-3"></i>
										</a>
										<?php
										if (isset($_GET['status'])) {
											if ($_GET['error']) {
												echo "<div style='color:red;'>" . $_GET['status'] . "</div>";
											} else {
												echo "<div style='color:green;'>" . $_GET['status'] . "</div>";
											}
										}
										?>
										<div class="heading-elements">
											<ul class="list-inline mb-0">
												<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
												<li><a data-action="reload"><i class="icon-reload"></i></a></li>
												<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
												<li><a data-action="close"><i class="icon-cross2"></i></a></li>
											</ul>
										</div>
									</div>
									<form method="POST" action="add_warden.php" enctype="multipart/form-data">
										<div class="card-body collapse in">
											<div class="card-block">
												<form class="form">
													<div class="form-body">
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label for="">Name</label>
																	<input type="text" id="" required class="form-control" placeholder="First Name" name="name" autocomplete="off">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label for="">Username</label>
																	<input type="mail" id="" required class="form-control" placeholder="Username" name="username" autocomplete="off">
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label for="">Password</label>
																	<input type="password" id="" required class="form-control" placeholder="Password" name="password" autocomplete="off">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label for="">Phone Number</label>
																	<input type="text" id="timepicker" class="form-control" placeholder="Phone Number" name="mobile" autocomplete="off" required>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label for="projectinput6">Place</label>
																	<select required class="select2-B form-control" name="place">
																		<option value="KERALA">Kerala</option>
																		<option value="TAMIL NADU">Tamil Nadu</option>
																		<option value="CHENNAI">Chennai</option>
																		<option value="KARNATAKA">karnataka</option>
																		<option value="DELHI">Delhi</option>
																		<option value="KOLKATA">Kolkata</option>
																	</select>
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label for="projectinput2">Sex</label>
																	<div class="input-group">
																		<label class="display-inline-block custom-control custom-radio">
																			<input required type="radio" name="sex" value="male" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Male</span>
																		</label>
																		<label class="display-inline-block custom-control custom-radio">
																			<input type="radio" name="sex" value="female" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Female</span>
																		</label>
																	</div>
																</div>
															</div>

															<div class="col-md-12">
																<div class="form-group">
																	<input type="submit" name="upload" class="btn btn-primary" value="submit">
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
						</form>


						<div class="row">
							<div class="col-xs-12">


								<div class="responsive-table">
									<div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
										<div class="row">
											<div class="col-sm-12" style="overflow-x: auto;">
												<?php
												include 'db_connect.php';
												$sql = 'SELECT * FROM addwarden_tb';
												$result = $conn->query($sql);
												if ($result->num_rows > 0) {
													echo "
													<table id='datatables-example' class='table table-striped table-bordered dataTable no-footer' width='100%'' cellspacing='0' role='grid' aria-describedby='datatables-example_info' style='width: 100%;''>
														<thead>
															<tr role='row'>
																<th class='sorting_asc' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-sort='ascending' aria-label='Name: activate to sort column descending' style='width: 169px;''>Name</th>
																<th class='sorting' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-label='Position: activate to sort column ascending' style='width: 263px;'>Username</th>
																<th class='sorting' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-label='Start date: activate to sort column ascending' style='width: 119px;'>Password</th>
																<th class='sorting' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-label='Start date: activate to sort column ascending' style='width: 119px;'>Number</th>
																<th class='sorting' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-label='Start date: activate to sort column ascending' style='width: 119px;'>Place</th>
																<th class='sorting' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-label='Start date: activate to sort column ascending' style='width: 119px;'>Sex</th>
															</tr>
														</thead>";
													while ($row = $result->fetch_assoc()) {
														echo "
														<tbody>


															<tr role='row' class='odd'>
																<td class='sorting_1'>" . $row['name'] . '</td>
																<td>' . $row['username'] . '</td>
																<td>' . $row['password'] . '</td>
																<td>' . $row['mobile'] . '</td>
																<td>' . $row['place'] . '</td>
																<td>' . $row['sex'] . '</td>
																<td>
																<a href=delete.php?id=' . $row['id'] . "><span style='color:#fff;' class='btn btn-danger glyphicon glyphicon-trash' title='Delete post'></span></a>
																</td>
																</tr>
														</tbody>";
													}
													echo '</table>';
												} else {
													echo '0 result';
												}
												$conn->close();
												?>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>
				</div>
			</div>
		</div>


		</section>

	</div>

	</div>
	</div>

	<!-- ////////////////////////////////////////////////////////////////////////////-->

	<!-- scripts-->
	<?php
	include("./components/script.php")
	?>
	<!-- ////scripts-->
</body>

</html>