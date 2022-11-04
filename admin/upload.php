<?php
include("db_connect.php");
  // Create database connection

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$a = mysqli_real_escape_string($conn, $_POST['name']);

  	$b = mysqli_real_escape_string($conn, $_POST['username']);

  	$c = mysqli_real_escape_string($conn, $_POST['paswword']);
  	$d = mysqli_real_escape_string($conn, $_POST['mobile']);
  	$e = mysqli_real_escape_string($conn, $_POST['place']);
  	$f = mysqli_real_escape_string($conn, $_POST['sex']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO addwarden_tb (name,username,password,mobile,place,sex,image) VALUES ('$a','$b','$c','$d','$e','$f','$image')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  //$result = mysqli_query($conn, "SELECT * FROM images");
?>
