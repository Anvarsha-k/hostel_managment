<?php
include("./components/session.php");

?>


<?php
include("db_connect.php");
if(isset($_GET["task"]))
{
	if($_GET["task"]=="update")
	{
		$id=@$_GET['id'];
		$e=@$_POST['status'];
		$update=$conn->query("UPDATE studentcomplaints_tb SET status='$e' where id=$id")or die(mysqli_error());
		if($update>0){
			header("location:viewstudentcomplaints.php?task=succesfully");
		}
		else{
			header("location:reply.php");
		}
	}
}
	if(isset($_GET['id']))
	{
	$id=$_GET['id'];
	$result=$conn->query("SELECT * from studentcomplaints_tb where id='$id'");
	while($row=$result->fetch_assoc())
		{
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
<?php
include("./components/links.php");
?>
<!-- END Custom CSS-->
</head>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns fixed-navbar">

<!-- navbar-fixed-top-->
	<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-light navbar-shadow">
		<div class="navbar-wrapper">
			<div class="navbar-header">
				<ul class="nav navbar-nav">
					<li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
					<li class="nav-item">
					<a href="index.html" class="navbar-brand nav-link">
					<img alt="branding logo" src="assets/images/logo/robust-logo-light.png" data-expand="assets/images/logo/robust-logo-light.png" data-collapse="assets/images/logo/robust-logo-small.png" class="brand-logo">
					</a>
					</li>
					<li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
				</ul>
			</div>
			<div class="navbar-container content container-fluid">
				<div id="navbar-mobile" class="collapse navbar-toggleable-sm">
					<ul class="nav navbar-nav">
						<li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"></i></a></li>
					</ul>
					<ul class="nav navbar-nav float-xs-right">
						<li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="assets/images/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">Admin</span></a>
						<div class="dropdown-menu dropdown-menu-right">
						<a href="logout.php" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
						</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>




<!-- main menu-->
	<div data-scroll-to-active="true" class="main-menu menu-fixed menu-light menu-accordion menu-shadow">

		<div class="main-menu-header">
		<!-- <input type="text" placeholder="Search" class="menu-search form-control round"/> -->
		</div>


		<div class="main-menu-content">
			
		</div>

	</div>
<!-- / main menu-->

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Reply To Complaint</h2>
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
								<h4 class="card-title" id="basic-layout-form">Write Reply</h4>
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
								
												
								<form class="form" action="reply.php?task=update&id=<?php echo $id;?>"method="POST">
								<div class="col-md-12">
													<div class="form-group">
													
													<textarea id="" rows="5" class="form-control summernote hidden" name="status" placeholder="About Project"></textarea>
													</div>
												</div>
												<div class="col-md-12">
												<div class="form-group">
												<button type="submit" class="btn btn-primary">
												<i class="icon-check2"></i>Enter</button>
												</div>
												</div>
											</form>
											<?php
		}
	}
?>

				
							

									<div class="responsive-table">
										<div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
											<div class="row">
												<div class="col-sm-12" style="overflow-x: auto;">

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


<footer class="footer footer-static footer-light navbar-border">
<p class="clearfix text-muted text-sm-center mb-0 px-2">
	<span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2018 <a href="" target="_blank" class="text-bold-700 black footer_logo">everything.<span>a</span><i>e</i> </a>, All rights reserved. </span>
	<span class="float-md-right d-xs-block d-md-inline-block">Powered By : <a href="http://tnmonlinesolutions.com/" target="_blank" class="text-bold-500 grey darken-2">TNM Online Solutions </a></span></p>
</footer>


<div class="modal myModal" id="myModal">
	    <div class="modal-dialog">
	        <button type="button" class="close" data-dismiss="modal"></button>
	      <div class="modal-content">

	        <div class="modal-body" id="">
	        	<form class="form">
										<div class="form-body">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Name</label>
													<input type="text" id="" class="form-control" placeholder="First Name" name="fname" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Mail</label>
													<input type="mail" id="" class="form-control" placeholder="Last Name" name="lname"" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">File</label>
													<input type="file" id="" class="form-control" placeholder="Last Name" name="lname">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group sandbox-container">
													<label for="">Datepicker</label>
													<input type="text" id="" class="form-control" placeholder="Last Name" name="lname" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Timepicker</label>
													<input type="text" id="" class="form-control timepicker" placeholder="Last Name" name="lname" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput6">Select</label>
														<select class="select2-B form-control" multiple="multiple">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Checkbox</label>
													<div class="input-group">
													<label class="display-inline-block custom-control custom-checkbox">
													<input type="checkbox" name="customer1" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Home Visible</span>
													</label>
													<label class="display-inline-block custom-control custom-checkbox">
													<input type="checkbox" name="customer1" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Home Visible</span>
													</label>
													</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="projectinput2">Radio</label>
													<div class="input-group">
													<label class="display-inline-block custom-control custom-radio">
													<input type="radio" name="customer1" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Home Visible</span>
													</label>
													<label class="display-inline-block custom-control custom-radio">
													<input type="radio" name="customer1" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Home Visible</span>
													</label>
													</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
													<label for="">Textarea</label>
													<textarea id="" rows="5" class="form-control summernote hidden" name="comment" placeholder="About Project"></textarea>
													</div>
												</div>
												<div class="col-md-12">
												<div class="form-group">
												<button type="submit" class="btn btn-primary">
												<i class="icon-check2"></i> Submit</button>
												</div>
												</div>
											</div>
										</div>
									</form>
	        </div>

	        
	      </div>
	    </div>
	</div>


<!-- BEGIN VENDOR JS-->
<?php
include("./components/script.php");
?>

</body>
</html>