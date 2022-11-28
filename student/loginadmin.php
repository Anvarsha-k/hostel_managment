<?php
session_start();
include 'db_connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['addmission'];
    $query = mysqli_query($conn, "SELECT * FROM addstudent_tb WHERE addmission='$a' ");
    if (mysqli_num_rows($query) < 1) {
        $_SESSION['msg'] = 'login failed user not found!';
        $msg = 'login failed user not found!';
        header('location:login.php?msg=' . $msg);
    } else {
        $row = mysqli_fetch_array($query);
        $_SESSION['id'] = $row['id'];
        $_SESSION['addmission'] = $row['addmission'];

        header('location:viewprofiles.php');
    }
}
