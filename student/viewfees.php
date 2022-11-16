
<?php
include('./components/session.php');

include('db_connect.php');

//include('./components/menu.php');
include('./components/links.php');
//include('./components/header.php');

$sql = "SELECT * FROM addfees where name='$a'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
$name = $row['name'];
$fee_month = $row['fee_month'];
$amount = $row['amount'];
$remaining = $row['remaining'];
$total = $row['total'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW FEES</title>
</head>

<body>
    <table>
        <tr>
            <th>name</th>
            <td>AMOUNT</td>
            <td>ADDRESS</td>
            <td>PLACE</td>

        </tr>
    </table>
</body>
<?php
include('./components/scripts.php');
?>

</html>