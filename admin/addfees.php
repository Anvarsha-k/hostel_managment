<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("./components/links.php");

    ?>
</head>
<?php
include('db_connect.php');
$sql = 'select * from addstudent_tb';
$result = mysqli_query($conn, $sql);

?>


<body>

    <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns fixed-navbar">
        <!-- navbar-fixed-top-->
        <?php
        include("./components/header.php");
        ?>
        <!--//// navbar-fixed-top-->
        <!-- main menu-->
        <?php
        include("./components/menu.php");
        ?>
        <!-- / main menu-->
        <div class="app-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-xs-12 mb-1">
                        <h2 class="content-header-title">Fees</h2>
                    </div>


                    <div class="content-body">

                        <section id="basic-form-layouts">
                            <div class="row match-height">
                                <div class="col-xs-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title" id="basic-layout-form">Add Fees</h4>
                                            <a class="heading-elements-toggle"><i class="icon-multipart/form-dataellipsis font-medium-3"></i>
                                            </a>
                                            <div class="heading-elements">
                                                <ul class="list-inline mb-0">
                                                    <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                                    <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                                    <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>



                                        <form method="POST" action="" enctype="multipart/form-data">
                                            <div class="card-body collapse in">
                                                <div class="card-block">
                                                    <form class="form">
                                                        <div class="form-body">
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="projectinput6">Name</label>
                                                                        <select id="nameList" class="select2-B form-control" name="name" onchange="getUser(this.value)">
                                                                            <?php

                                                                            while ($row = $result->fetch_assoc()) {
                                                                                $name = $row['name'];
                                                                                $id = $row['id']; ?>
                                                                                <option value="<?php echo $name; ?>"><?php echo $name; ?></option>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">month</label>

                                                                        <select class="select2-B form-control" id="monthList" name="month" onchange="getAmountRemainingBasedOnMonth(this.value)">
                                                                            <option>January</option>
                                                                            <option>February</option>
                                                                            <option>March</option>
                                                                            <option>April</option>
                                                                            <option>May</option>
                                                                            <option>June</option>
                                                                            <option>July</option>
                                                                            <option>August</option>
                                                                            <option>September</option>
                                                                            <option>October</option>
                                                                            <option>November</option>
                                                                            <option>December</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </form>

                                                    <script>
                                                        var userName;
                                                        var month;
                                                        var e = document.getElementById("nameList");
                                                        var nameText = e.options[e.selectedIndex].text;
                                                        var g = document.getElementById("monthList");
                                                        var monthText = e.options[e.selectedIndex].text;
                                                        userName = nameText;
                                                        month = monthText;
                                                        if (window.XMLHttpRequest) {
                                                            // code for IE7+, Firefox, Chrome, Opera, Safari
                                                            xmlhttp = new XMLHttpRequest();
                                                        } else {
                                                            // code for IE6, IE5
                                                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                        }
                                                        xmlhttp.onreadystatechange = function() {
                                                            if (this.readyState == 4 && this.status == 200) {
                                                                document.getElementById("txtHint").innerHTML = this.responseText;
                                                            }
                                                        };
                                                        xmlhttp.open("GET", "getFeesDetails.php?q=" + userName + "&r=" + month, true);
                                                        xmlhttp.send();

                                                        function getUser(str) {
                                                            console.log("name changed");
                                                            userName = str;
                                                            if (userName || month) {
                                                                if (str == "") {
                                                                    document.getElementById("txtHint").innerHTML = "";
                                                                    return;
                                                                } else {
                                                                    if (window.XMLHttpRequest) {
                                                                        // code for IE7+, Firefox, Chrome, Opera, Safari
                                                                        xmlhttp = new XMLHttpRequest();
                                                                    } else {
                                                                        // code for IE6, IE5
                                                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                                    }
                                                                    xmlhttp.onreadystatechange = function() {
                                                                        if (this.readyState == 4 && this.status == 200) {
                                                                            document.getElementById("txtHint").innerHTML = this.responseText;
                                                                        }
                                                                    };
                                                                    xmlhttp.open("GET", "getFeesDetails.php?q=" + userName + "&r=" + month, true);
                                                                    xmlhttp.send();
                                                                }
                                                            }

                                                        }

                                                        function getAmountRemainingBasedOnMonth(str) {
                                                            month = str;
                                                            if (userName && month) {
                                                                if (str == "") {
                                                                    document.getElementById("txtHint").innerHTML = "";
                                                                    return;
                                                                } else {
                                                                    if (window.XMLHttpRequest) {
                                                                        // code for IE7+, Firefox, Chrome, Opera, Safari
                                                                        xmlhttp = new XMLHttpRequest();
                                                                    } else {
                                                                        // code for IE6, IE5
                                                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                                    }
                                                                    xmlhttp.onreadystatechange = function() {
                                                                        if (this.readyState == 4 && this.status == 200) {
                                                                            document.getElementById("txtHint").innerHTML = this.responseText;
                                                                        }
                                                                    };
                                                                    xmlhttp.open("GET", "getFeesDetails.php?q=" + userName + "&r=" + month, true);
                                                                    xmlhttp.send();
                                                                }
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div id="txtHint"></div>

                            <!-- ////////////////////////////////////////////////////////////////////////////-->

                            <!-- scripts-->
                            <?php
                            include("./components/script.php")
                            ?>
                            <!-- ////scripts-->
                            <?php
                            if (isset($_POST['upload'])) {
                                $name = mysqli_real_escape_string($conn, $_POST['name']);

                                $month = mysqli_real_escape_string($conn, $_POST['month']);

                                $amount = mysqli_real_escape_string($conn, $_POST['amount']);
                                $total = 5000;
                                $remaining = $total - (int)$amount;
                                $sql = "INSERT INTO addfees (name,month,amount,total,remaining) VALUES ('$name','$month','$amount','$total','$remaining')";
                                mysqli_query($conn, $sql);
                            }
                            ?>
    </body>

</html>