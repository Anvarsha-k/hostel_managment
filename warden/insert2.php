<?php
include("db_connect.php");
$a=mysqli_real_escape_string($conn,$_REQUEST['da']);
$b=mysqli_real_escape_string($conn,$_REQUEST['breakfast']);
$c=mysqli_real_escape_string($conn,$_REQUEST['btime']);
$d=mysqli_real_escape_string($conn,$_REQUEST['lunch']);
$e=mysqli_real_escape_string($conn,$_REQUEST['ltime']);
$f=mysqli_real_escape_string($conn,$_REQUEST['dinner']);
$g=mysqli_real_escape_string($conn,$_REQUEST['dtime']);
$sql="INSERT INTO addfood_tb(da,breakfast,btime,lunch,ltime,dinner,dtime)VALUES('$a','$b','$c','$d','$e','$f','$g')";
if(mysqli_query($conn,$sql))
{
	header("location:addfood.php");
}
else{
	echo "ERROR:could not able to execute sql:".myqsli_error($sql);
}
mysqli_close($conn);
?>