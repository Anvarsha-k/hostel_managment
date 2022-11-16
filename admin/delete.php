<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	include("db_connect.php");
	$result = $conn->query("delete from addwarden_tb where id=$id") or die($mysqli->connect_error());
	header("location:add_warden.php?task=succesfully");
} else {
	header("location:add_warden.php?task=failed");
}
