<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	include("db_connect.php");
	$result=$conn->query("delete from studentcomplaints_tb where id=$id")or die(mysqli_error());
	header("location:viewstudentcomplaints.php?task=succcesfully");
}
else{
	header("location:viewstudentcomplaints.php?task=failed");
}
?>