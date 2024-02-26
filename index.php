<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
session_start();
// include('./controllers/con_db.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TATC-Delivery </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js"></script> -->
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
</head>

<body >
    <?php

    if (empty($_GET['page']) || !ctype_alnum(str_replace(['-', '_'], '', $_GET['page'])) || !file_exists("pages/{$_GET['page']}.php")) {
        die(header('Location: ?page=home'));
    }
    require_once "pages/{$_GET['page']}.php";
    ?>
    <script>
        function webload() {
            getLocation()
        }
    </script>
    <script src="./public/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="./public/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>