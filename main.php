<?php
    if (!isset($_SESSION['session'])) {
        header('Location: index.php');
        die();
    }
