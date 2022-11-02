<!DOCTYPE html>
<html>

<head>
    <style>


    </style>
</head>

<body>
    <div class='card-body collapse in'>
        <div class='card-block'>
            <form class='form'>
                <div class='form-body'>
                </div>
            </form>
        </div>
    </div>
    <?php
    $name = $_GET['q'];
    $month = $_GET['r'];
    // echo $month;
    include("db_connect.php");
    $sql = "SELECT * FROM addfees WHERE name='" . $name . "' AND fee_month='" . $month . "' ";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    $remaining = 5000;
    if ($data != NULL) {
        if ($data['remaining'] != 0) {
            $remaining  = $data['remaining'];
        }
        echo "
        <div class='card-body collapse in'>
        <div class='card-block'>
            <form class='form'>
                <div class='form-body'>
        <div class='col-md-6'>
    <div class='form-group'>
        <label for=''>Amount (" . $remaining . ")</label>
        <input type='number' max=" . $remaining . " name='amount' autocomplete='off'>
    </div>
</div>
</div>
</form>
</div>
</div>
";
    } else {
        echo "
        <div class='card-body collapse in'>
        <div class='card-block'>
            <form class='form'>
                <div class='form-body'>
        <div class='col-md-6'>
        <div class='form-group'>
            <label for=''>Amount (" . $remaining . ")</label>
            <input type='number' max=" . $remaining . " name='amount' autocomplete='off'>
        </div>
    </div>
    </div>
</form>
</div>
</div>
    ";
    }

    ?>