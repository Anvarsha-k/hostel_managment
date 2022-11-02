<?php
include("db_connect.php");
$a=mysqli_real_escape_string($conn,$_REQUEST['name']);
$b=mysqli_real_escape_string($conn,$_REQUEST['addmission']);
$c=mysqli_real_escape_string($conn,$_REQUEST['datex']);
$d=mysqli_real_escape_string($conn,$_REQUEST['complaint']);
$sql="INSERT INTO addcomplaints_tb (name,addmission,datex,complaint)VALUES('$a','$b','$c','$d')";
if(mysqli_query($conn,$sql))
{
	header("location:addcomplaints.php");
}
else{
	echo "ERROR:could not able to execute $sql".mysqli_error($conn);
}
mysqli_close($conn);
?>