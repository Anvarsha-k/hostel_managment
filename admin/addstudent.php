<?php
include("./components/session.php");
include('db_connect.php');
?>


<?php

$msg = '';

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $a = mysqli_real_escape_string($conn, $_POST['name']);

    $b = mysqli_real_escape_string($conn, $_POST['addmission']);

    $d = mysqli_real_escape_string($conn, $_POST['mobile']);
    $e = mysqli_real_escape_string($conn, $_POST['place']);
    $f = mysqli_real_escape_string($conn, $_POST['sex']);

    // image file directorydmcksachaxlcbzxljcbaXkhcgazxgab xz,cacvsx,agz
    $target = 'images/' . basename($image);

    $sql = "INSERT INTO addstudent_tb (name,addmission,mobile,place,sex,image) VALUES ('$a','$b','$d','$e','$f','$image')";
    // execute query
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = 'Image uploaded successfully';
    } else {
        $msg = 'Failed to upload image';
    }
}
//$result = mysqli_query($conn, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include('./components/links.php');
    ?>
</head>

<body>

    <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns fixed-navbar">
        <?php
        include("./components/header.php");
        ?>



        <!-- main menu-->
        <?php
        include("./components/menu.php");
        ?>
        <!-- / main menu-->

        <!-- ////////////////////////////////////////////////////////////////////////////-->


        <div class="app-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-xs-12 mb-1">
                        <h2 class="content-header-title">Student</h2>
                    </div>

                </div>
                <div class="content-body">

                    <section id="basic-form-layouts">
                        <div class="row match-height">
                            <div class="col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title" id="basic-layout-form">Add Student</h4>
                                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i>
                                        </a>
                                        <?php
                                        if (isset($_GET['status'])) {
                                            if ($_GET['error']) {
                                                echo "<div style='color:red;'>" . $_GET['status'] . "</div>";
                                            } else {
                                                echo "<div style='color:green;'>" . $_GET['status'] . "</div>";
                                            }
                                        }
                                        ?>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                                <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                                <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body collapse in">
                                        <div class="card-block">
                                            <form class="form" method="post" action="addstudent.php" enctype="multipart/form-data">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Name</label>
                                                                <input type="text" id="" class="form-control" placeholder="Name" name="name" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Addmission Number</label>
                                                                <input type="mail" id="" class="form-control" placeholder="Addmission Number" name="addmission" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Photo</label>
                                                                <input type="file" id="" class="form-control" placeholder="Last Name" name="image">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Sex</label>
                                                                    <div class="input-group">
                                                                        <label class="display-inline-block custom-control custom-checkbox">
                                                                            <input type="checkbox" name="sex" value="male" class="custom-control-input">
                                                                            <span class="custom-control-indicator"></span>
                                                                            <span class="custom-control-description">Male</span>
                                                                        </label>
                                                                        <label class="display-inline-block custom-control custom-checkbox">
                                                                            <input type="checkbox" name="sex" value="female" class="custom-control-input">
                                                                            <span class="custom-control-indicator"></span>
                                                                            <span class="custom-control-description">Female</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Phone Number</label>
                                                            <input type="text" id="timepicker" class="form-control" placeholder="Phone Number" name="mobile" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput6">Place</label>
                                                            <select class="form-control" name="place">
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </select>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="submit" name="upload" class="btn btn-primary">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>



                </section>

            </div>

        </div>
        </div>


        <!-- ////////////////////////////////////////////////////////////////////////////-->




        <div class="modal myModal" id="myModal">
            <div class="modal-dialog">
                <button type="button" class="close" data-dismiss="modal"></button>
                <div class="modal-content">

                    <div class="modal-body" id="">
                        <form class="form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" id="" class="form-control" placeholder="First Name" name="fname" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Mail</label>
                                            <input type="mail" id="" class="form-control" placeholder="Last Name" name="lname"" autocomplete=" off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">File</label>
                                            <input type="file" id="" class="form-control" placeholder="Last Name" name="lname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group sandbox-container">
                                            <label for="">Datepicker</label>
                                            <input type="text" id="" class="form-control" placeholder="Last Name" name="lname" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Timepicker</label>
                                            <input type="text" id="" class="form-control timepicker" placeholder="Last Name" name="lname" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput6">Select</label>
                                            <select class="select2-B form-control" multiple="multiple">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Checkbox</label>
                                            <div class="input-group">
                                                <label class="display-inline-block custom-control custom-checkbox">
                                                    <input type="checkbox" name="customer1" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Home Visible</span>
                                                </label>
                                                <label class="display-inline-block custom-control custom-checkbox">
                                                    <input type="checkbox" name="customer1" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Home Visible</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput2">Radio</label>
                                            <div class="input-group">
                                                <label class="display-inline-block custom-control custom-radio">
                                                    <input type="radio" name="customer1" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Home Visible</span>
                                                </label>
                                                <label class="display-inline-block custom-control custom-radio">
                                                    <input type="radio" name="customer1" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Home Visible</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Textarea</label>
                                            <textarea id="" rows="5" class="form-control summernote hidden" name="comment" placeholder="About Project"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="icon-check2"></i> Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <?php
        include("./components/script.php");
        ?>

    </body>

</html>