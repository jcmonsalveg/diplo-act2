<?php

include_once('../../config/config.php');
include('Usuario.php');

$u = new Usuario();
$data = $u->findAll();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $remove = $u->delete($_GET['id']);
    if ($remove) {
        header('Location: ' . 'find.php');
    } else {
        $mensaje = '<div class ="alert alert-danger"> Error al eliminar</div> ';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ROOT ?>/css/add.css">
</head>

<body>


    <div class="container">
        <?php
        include('../navbar.php')
            ?>

        <div class="row">

            <div class="col-lg-10 offset-lg-1">
                <?php
                if (isset($mensaje)) {
                    echo $mensaje;
                }
                ?>
                <br>
                <h3 class="mb-2 footer-links">Usuarios registrados</h3>
                <br>
                <table class="table  text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Servicio</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($pt = mysqli_fetch_object($data)) {
                            echo "<tr>";
                            echo "<th scope='row'>$pt->id</th>";
                            echo "<td>$pt->usuario</td>";
                            echo "<td>$pt->nombres</td>";
                            echo "<td>$pt->apellidos</td>";
                            echo "<td>$pt->email</td>";
                            echo "<td>$pt->celular</td>";
                            echo "<td>$pt->servicio</td>";
                            echo "<td>$pt->estado</td>";
                            echo "<td><a class='btn btn-dark' href='" . ROOT . "/pages/usuario/edit.php?id=$pt->id'> Modificar </a> </td>";
                            echo "<td><a class='btn btn-danger' href='" . ROOT . "/pages/usuario/find.php?id=$pt->id'> Eliminar </a> </td>";
                            echo "<tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>

        <?php
        include('../footer.php')
            ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>