<?php
    if (isset($_POST['user'], $_POST['pass']))
        if ($_POST['user'] == 'SmartDrops' && $_POST['pass'] == 'SD123')
            header('Location: main.php');
        else {
            header('Location: index.php');
            die();
        }
    else
        header('Location: index.php');
        die();
