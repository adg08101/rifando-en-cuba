<?php
    session_start();
    if (!isset($_SESSION['session'])) {
        header('Location: index.php');
        die();
    } else {
        echo $_SESSION['session'];
    }
