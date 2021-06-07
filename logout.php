<?php
session_start();
session_destroy($_SESSION['session']);
session_destroy();
header('Location: index.php');
die();
