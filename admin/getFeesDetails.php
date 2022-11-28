<html>

<head>
    <?php
    include("./components/links.php");

    ?>
</head>

<body>
    <div class="content-body">

        <section id="basic-form-layouts">
            <div class="row match-height">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <form method="POST" action="insertFees.php" enctype="multipart/form-data">
                                <div class='card-body collapse in'>
                                    <div class='card-block'>
                                        <form class='form'>
                                            <div class='form-body'>
                                                <div class="row">
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
                                                        echo "<div class='col-md-6'>
    <div class='form-group'>
        <label for=''>Amount (" . $remaining . ")</label>
        <input required type='number' max=" . $remaining . " name='amount' autocomplete='off'>
    </div>
</div>
<div class='col-md-12'>
												<div class='form-group'>
																	<input type='submit' name='upload' class='btn btn-primary' value='submit'>
																</div>
															</div>";
                                                    } else {
                                                        echo "
        
        <div class='col-md-6'>
        <div class='form-group'>
            <label for=''>Amount (" . $remaining . ")</label>
            <input required type='number' max=" . $remaining . " name='amount' autocomplete='off'>
        </div>
    </div>
    <div class='col-md-12'>
												<div class='form-group'>
																	<input type='submit' name='upload' class='btn btn-primary' value='submit'>
																</div>
															</div>
    ";
                                                    }

                                                    ?>
                                                </div>
                                                <input type='hidden' value="<?php echo $name ?>" name='name' autocomplete='off'>
                                                <input type='hidden' value="<?php echo $month ?>" name='month' autocomplete='off'>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>