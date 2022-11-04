<!DOCTYPE html>
<html>
<head>
<style>


</style>
</head>
<body>

<?php
$q = $_GET['q'];

include("db_connect.php");
$sql="SELECT * FROM addstudent_tb WHERE id = '".$q."'";
$result = mysqli_query($conn,$sql);

echo "<table id='datatables-example' class='table table-striped table-bordered dataTable no-footer' width='100%'' cellspacing='0' role='grid' aria-describedby='datatables-example_info' style='width: 100%;''>
<tr role='row'>
<th>Firstname</th>
<th>Addmission Number</th>
<th>Phone Number</th>
<th>Place</th>
<th>Sex</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['addmission'] . "</td>";
    echo "<td>" . $row['mobile'] . "</td>";
    echo "<td>" . $row['place'] . "</td>";
    echo "<td>" . $row['sex'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>