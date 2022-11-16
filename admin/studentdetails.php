<?php
include 'db_connect.php';
$sql = 'select * from addstudent_tb';
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<head>
	<!--CUSTOM CSS-->
	<?php
	include("./components/links.php");
	?>
	<!-- END Custom CSS-->
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

	<!-- ////////////////////////////////////////////////////////////////////////////-->


	<div class="app-content content container-fluid">
		<div class="content-wrapper">
			<div class="content-header row">
				<div class="content-header-left col-md-6 col-xs-12 mb-1">
					<h2 class="content-header-title">Student Detials</h2>
				</div>


			</div>
			<div class="content-body">

				<section id="basic-form-layouts">
					<div class="row match-height">
						<div class="col-xs-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="basic-layout-form">View Details</h4>
									<a class="heading-elements-toggle"><i class="icon-multipart/form-dataellipsis font-medium-3"></i>
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
								<html>

								<head>
									<script>
										function showUser(str) {
											if (str == "") {
												document.getElementById("txtHint").innerHTML = "";
												return;
											} else {
												if (window.XMLHttpRequest) {
													// code for IE7+, Firefox, Chrome, Opera, Safari
													xmlhttp = new XMLHttpRequest();
												} else {
													// code for IE6, IE5
													xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
												}
												xmlhttp.onreadystatechange = function() {
													if (this.readyState == 4 && this.status == 200) {
														document.getElementById("txtHint").innerHTML = this.responseText;
													}
												};
												xmlhttp.open("GET", "getdetails.php?q=" + str, true);
												xmlhttp.send();
											}
										}
									</script>
								</head>
								<form method="POST" action="add_warden.php" enctype="multipart/form-data">
									<div class="card-body collapse in">
										<div class="card-block">
											<form class="form">
												<div class="form-body">
													<div class="row">

														<div class="col-md-6">
															<div class="form-group">
																<label for="projectinput6">Name</label>
																<select class="select2-B form-control" name="name" onchange="showUser(this.value)">
																	<?php

																	while ($row = $result->fetch_assoc()) {
																		$a = $row['name'];
																		$id = $row['id']; ?>
																		<option value="<?php echo $id; ?>"><?php echo $a; ?></option>
																	<?php
																	}
																	?>
																</select>
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
					<div id="txtHint"></div>

</body>

</html>
</form>



</section>

</div>

</div>
</div>


<!-- ////////////////////////////////////////////////////////////////////////////-->



<!-- BEGIN VENDOR JS-->
<?php
include("./components/script.php");
?>
<!--ENDING VENDOR JS-->
</body>

</html>