<?php
session_start();
if (!isset($_SESSION['session'])) {
    header('Location: index.php');
    die();
} else {
    $mysqli = new mysqli("localhost", "id16643740_root", "ContraTSK2021-*", "id16643740_tasks");
    if ($mysqli->connect_errno) {
        header('Location: logout.php');
        die();
    } else {
        $fecha = $_POST['fecha'];
        $prioridad = $_POST['prioridad'];
        $responsable = $_POST['responsable'];
        $tarea = $_POST['tarea'];
        $tipo = $_POST['tipo'];

        if (count($responsable) == 1)
            $responsable = $responsable[0];
        else
            $responsable = implode(", ", $responsable);

        $sql = "INSERT INTO tareas (fecha_hora, prioridad, responsable, tarea, 
            tipo) VALUES ('$fecha', '$prioridad', '$responsable', '$tarea', '$tipo')";

        if (mysqli_query($mysqli, $sql)) {
            header('Location: main.php');
            die();
        } else {
            header('Location: logout.php');
            die();
        }
        mysqli_close($mysqli);
    }
}