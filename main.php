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

    <link href="css/main_styles.css" rel="stylesheet">
    <link href="css/vanillaSelectBox.css" rel="stylesheet">

    <script src="js/vanillaSelectBox.js"></script>

    <script src="js/app.js"></script>
</head>

<body>

<div class="container" id="app">
    <div class="row">
        <div class="col-3">
            <form method="get" action="logout.php">
                <input type="submit" value="Logout" class="logout">
            </form>
            <form method="post" action="add.php">
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Responsable</label>
                    <select multiple class="form-control" id="responsable"
                            name="responsable" size="2">
                        <option>Ahmed</option>
                        <option>Pupo</option>
                        <option>Manu</option>
                        <option>Ovi</option>
                        <option>Rose</option>
                        <option>Yunior</option>
                        <option>Fernando</option>
                        <option>Dayana</option>
                        <option>Angel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo</label>
                    <select class="form-control" id="type" name="tipo">
                        <option>Tarea</option>
                        <option>Reunión</option>
                        <option>Otro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Prioridad</label>
                    <select class="form-control" id="priority" name="prioridad">
                        <option>Baja</option>
                        <option>Media</option>
                        <option>Alta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Fecha</label>
                    <input class="form-control" type="date" name="fecha">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tarea</label>
                    <textarea class="form-control" id="task"
                              rows="3" name="tarea"></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Adicionar">
            </form>
        </div>
        <div class="col-9">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
