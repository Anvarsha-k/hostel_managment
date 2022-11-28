<?php
include './components/session.php';
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<head>
	<?php
	include './components/links.php'
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



	<div class="app-content content container-fluid">
		<div class="content-wrapper">
			<div class="content-header row">
				<div class="content-header-left col-md-6 col-xs-12 mb-1">
					<h2 class="content-header-title">Complaints</h2>
				</div>

				<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
					<div class="breadcrumb-wrapper col-xs-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="content-body">

				<section id="basic-form-layouts">
					<div class="row match-height">
						<div class="col-xs-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="basic-layout-form">Add Complaints</h4>
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
								<div class="card-body collapse in">
									<div class="card-block">
										<form class="form" method="post" action="insert.php">
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="">Student Name</label>
															<input type="text" required id="" class="form-control" placeholder="Name" name="name" autocomplete="off">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="">Addmission Number</label>
															<input type="number" id="" class="form-control" placeholder="Addmission Number" name="addmission" autocomplete="off">
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group sandbox-container">
															<label for="">Date</label>
															<input required type="text" id="" class="form-control" placeholder="Date" name="datex" autocomplete="off">
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															</label>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label for="">Complaint</label>
														<textarea required id="" rows="5" class="form-control summernote hidden" name="complaint" placeholder="About Project"></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" name="upload" class="btn btn-primary">
														</button>
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



			</section>

		</div>

	</div>
	</div>
	<!-- BEGIN VENDOR JS-->

	<?php
	include './components/scripts.php';
	?>

</body>

</html>