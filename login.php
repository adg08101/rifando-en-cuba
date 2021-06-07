<?php
    if (isset($_POST['user'], $_POST['pass']))
        echo $_POST['user'], $_POST['pass'];
    else
        header('Location: index.php');
        die();
