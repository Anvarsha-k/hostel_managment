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
				<h2 class="content-header-title">Add Food</h2>
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
								<h4 class="card-title" id="basic-layout-form">Food</h4>
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
									<form method="POST" action="insert2.php">
										<div class="form-body">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Day</label>
													<input type="text" id="" class="form-control" placeholder="Day" name="da" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Breakfast</label>
													<input type="text" id="" class="form-control" placeholder="Breakfast" name="breakfast" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Breakfast Time</label>
													<input type="text" id="" id="timepicker" class="form-control timepicker" placeholder="Breakfast time" name="btime" autocomplete="off"">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Lunch</label>
													<input type="text" id="" class="form-control" placeholder="Lunch" name="lunch" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Lunch Time</label>
													<input type="text" id="timepicker" class="form-control timepicker" placeholder="Lunch time" name="ltime" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Dinner</label>
													<input type="text" id="timepicker" class="form-control" placeholder="Dinner" name="dinner" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Dinner Time</label>
													<input type="text" id="timepicker" class="form-control timepicker" placeholder="Dinner time" name="dtime" autocomplete="off">
													</div>
												</div>
										
												
												<div class="col-md-12">
												<div class="form-group">
												<input type="submit" name="sub" class="btn btn-primary" value="submit">
												
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


<?php
include './components/scripts.php';
?>

</body>
</html>