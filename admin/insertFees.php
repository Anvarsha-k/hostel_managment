<?php

// Create database connection
include('db_connect.php');

// Initialize message variable
$msg = '';

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    // Get image name

    // Get text

    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $month = mysqli_real_escape_string($conn, $_POST['month']);

    // image file directory
    $sql = "SELECT * FROM addfees WHERE name='" . $name . "' AND fee_month='" . $month . "' ";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    if ($data != NULL) {
        if ($data['remaining'] == 0) {
            $rem  = 5000;
            $enteredAmount = (int)$amount;
            $remaining = $rem - $enteredAmount;
            $sql = "INSERT INTO addfees (name,fee_month,amount,total,remaining) VALUES ('$name','$month','$amount','5000','$remaining')";
            mysqli_query($conn, $sql);
            header("location:addfees.php");
        } else {
            $paidAmount = (int)$data['amount'];
            $enteredAmount = (int)$amount;
            $sumAmount = $paidAmount + $enteredAmount;
            $currentRemainingAmount = (int)$data['remaining'];
            $monthalanceRemainingAmout = $currentRemainingAmount - $enteredAmount;
            $id = $data['id'];
            $sql = "UPDATE  addfees SET amount='$sumAmount',remaining ='$monthalanceRemainingAmout' WHERE id='$id' ";
            mysqli_query($conn, $sql);
            header("location:addfees.php");
        }
        # code...
    } else {
        $rem  = 5000;
        $enteredAmount = (int)$amount;
        $remaining = $rem - $enteredAmount;
        $sql = "INSERT INTO addfees (name,fee_month,amount,total,remaining) VALUES ('$name','$month','$amount','5000','$remaining')";
        mysqli_query($conn, $sql);
        header("location:addfees.php");
    }
}
