<?php
session_start();
if (!isset($_SESSION['session'])) {
    header('Location: index.php');
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SD Task Management</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col">
            1 of 3
        </div>
        <div class="col-6">
            2 of 3 (wider)
        </div>
        <div class="col">
            3 of 3
        </div>
    </div>
    <div class="row">
        <div class="col">
            1 of 3
        </div>
        <div class="col-5">
            2 of 3 (wider)
        </div>
        <div class="col">
            3 of 3
        </div>
    </div>
</div>
</body>
</html>
