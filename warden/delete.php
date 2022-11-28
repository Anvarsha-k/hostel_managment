<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include 'db_connect.php';
    $result = $conn->query("delete from addfood_tb where id=$id") or die($mysqli->connect_error());
    header('location:viewfood.php?task=succesfully');
} else {
    header('location:viewfood.php?task=failed');
}
