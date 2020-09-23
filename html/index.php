<?php

$name="Anang Syah A.H";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Team Tree House <?php echo $name; ?></title>
    <style>

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-3 border bg-dark">
                <div class="d-flex flex-column m-5">
                    <img class="d-flex align-self-center" src="assets/images/login-illustration.png" alt="logo" width="150px">
                </div>

                <div class="d-flex flex-column m-5">
                    <div class="d-flex align-self-center">
                        <p class="h2 text-light"><?php echo $name ?></p>
                    </div>
                </div>
            </div>

            <div class="content col-lg-9 p-0 vh-100">

                <div class="d-flex flex-column">
                    <p class="h2 pt-4 pl-5">My First Practice</p>

                    <section class="pl-5">
                        <p class="h2">Unit</p>
                        <?php include "inc/units.php"; ?>
                        <p class="lead"><?php echo celciusToFahrenheit(80); ?></p>
                    </section>

                    <section class="pl-5">
                        <p class="h2">String</p>
                        <?php include "inc/string.php"; ?>
                        <p class="lead"><?php echo asKName("AnanG sYah AMIRUL HAqim"); ?></p>
                    </section>
                </div>

                <div class="d-flex position-absolute fixed-bottom">
                    <p class="font-weight-normal mx-auto">&copy; <?php echo $name; echo "Last Modified: "
                    . date("F d Y H:i:s.", getlastmod()); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>