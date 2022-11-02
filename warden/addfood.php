<?php
session_start();
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header('location:login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
<meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="PIXINVENT">
<title>Everything.ae</title>
<link rel="shortcut icon" type="image/png" href="assets/images/ico/favicon-32.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<!-- font icons-->
<link rel="stylesheet" type="text/css" href="assets/fonts/icomoon.css"> 
<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css"> 
<link rel="stylesheet" type="text/css" href="assets/fonts/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/pace.css">
<!-- END VENDOR CSS-->
<!-- BEGIN ROBUST CSS-->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="assets/css/app.css">
<link rel="stylesheet" type="text/css" href="assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="assets/css/summernote.css">
<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
<!-- END ROBUST CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="assets/css/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="assets/css/vertical-overlay-menu.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-switch.css">
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" crossorigin="anonymous">
<link href="assets/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="assets/css/mdtimepicker.css" rel="stylesheet" type="text/css">


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
						<li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="assets/images/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">Warden</span></a>
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
			<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">



				<li class=" nav-item"><a href="addstudent.php"><i class="icon-equalizer"></i><span data-i18n="nav.components.main" class="menu-title">Add student</span></a></li>

				<li class=" nav-item"><a href="addcomplaints.php"><i class="icon-sphere"></i><span data-i18n="nav.icons.main" class="menu-title">Add Complaints</span></a>
				</li>

				<li class=" nav-item"><a href="addfood.php"><i class="icon-bullhorn2"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Add Food</span></a>
				</li>

				<li class=" nav-item"><a href="viewstudentcomplaints.php"><i class="icon-pen2"></i><span data-i18n="nav.chartjs.main" class="menu-title">View Studentcomplaints</span></a></li>
				</li>

			</ul>
		</div>

	</div>
<!-- / main menu-->

<!-- ////////////////////////////////////////////////////////////////////////////-->


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


				<div class="row">
					<div class="col-xs-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Categories</h4>
								<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
								<div class="heading-elements">
									<ul class="list-inline mb-0">
										<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
										<li><a data-action="reload"><i class="icon-reload"></i></a></li>
										<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
										<li><a data-action="close"><i class="icon-cross2"></i></a></li>
									</ul>
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
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/tether.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="assets/js/unison.min.js" type="text/javascript"></script>
<script src="assets/js/blockUI.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="assets/js/screenfull.min.js" type="text/javascript"></script>
<script src="assets/js/pace.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->

<script src="assets/js/jquery.datatables.min.js"></script>
<script src="assets/js/datatables.bootstrap.min.js"></script>
<!-- BEGIN ROBUST JS-->
<script src="assets/js/app-menu.js" type="text/javascript"></script>
<script src="assets/js/app.js" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="assets/js/dashboard-lite.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
    $('#datatables-example2').DataTable();
  });
</script>
<!-- <script src="assets/js/bootstrap-switch.js"></script> -->
<!-- <script type="text/javascript">

    $(document).ready(function()
    {
        $("[name='status-change']").bootstrapSwitch();
        $('input[name="status-change"]').on('switchChange.bootstrapSwitch', function(event, state) {
            var this_=$(this);
            var id=$(this).data('id');
            var checkbox = $(this);  
            var status = checkbox.is(':checked');
            //alert(status);
            $.ajax({
                type: 'POST',
                //url: 'http://tnmonlinesolutions.com/foodzer/admin/super_admin/change_category_home_visible',
                //beforeSend: function(){$('input[name="status-change"]').bootstrapSwitch('toggleDisabled', true, true);},
                //complete: function(){},
                data: {category_id: id, status: status},
                success: function(html)
                {
                    //$('input[name="status-change"]').bootstrapSwitch('toggleDisabled', false, false);
                }
            });
        });

    });

</script> -->
<script src="assets/js/summernote.min.js"></script>
<script src="assets/js/select2.full.min.js"></script>
<script type="text/javascript">
	(function(jQuery){
          $('.summernote').summernote({
            height: 260
          });

          $(".select2-B").select2({
            tags: true
          });

    })(jQuery);
 </script>

<script type="text/javascript" src="assets/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		$('.sandbox-container input').datepicker({
			format: "dd-mm-yyyy",
		});
	});
</script>
<script src="assets/js/mdtimepicker.js"></script>
<script>
  $(document).ready(function(){
    $('.timepicker').mdtimepicker(); //Initializes the time picker
  });
</script>

</body>
</html>
