<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	include("db_connect.php");
	$result = $conn->query("delete from addcomplaints_tb where id=$id") or die(mysqli_error());
	header("location:viewwardencomplaints.php?task=succcesfully");
} else {
	header("location:viewwardencomplaints.php?task=failed");
}
