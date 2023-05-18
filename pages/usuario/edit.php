<?php

include_once('../../config/config.php');
include('Usuario.php');

$u = new Usuario();
$data = mysqli_fetch_object($u->findOne($_GET['id']));

if (isset($_POST) && !empty($_POST)) {

    $update = $u->update($_POST);

    if ($update) {
        $mensaje = '<div class ="alert alert-success"> Modificación exitosa</div> ';
    } else {
        $mensaje = '<div class ="alert alert-danger"> Error en la modificación</div> ';
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
                <br>
                <?php
                if (isset($mensaje)) {
                    echo $mensaje;
                }
                ?>
                <h3 class="mb-2 footer-links">Modificar usuario</h3>
                <div class="row">
                    <div class="col-md-12 pe-0">
                        <div class="form-left h-100 py-5 px-5">
                            <form method="POST" enctype="multipart/form-data" class="row g-4">
                                <div class="col-12">
                                    <label>Usuario<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                        <input type="text" class="form-control" placeholder="Ingrese Usuario"
                                            name="usuario" id="usuario" value="<?= $data->usuario ?>" required>
                                        <input type="hidden" name="id" value="<?= $data->id ?>">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label>Contraseña<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                        <input type="password" class="form-control" placeholder="Ingrese Contraseña"
                                            name="contrasena" value="<?= $data->usuario ?>" id="contrasena" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label>Nombres<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                        <input type="text" class="form-control" placeholder="Ingrese Nombres"
                                            name="nombres" value="<?= $data->nombres ?>" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label>Apellidos<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                        <input type="text" class="form-control" placeholder="Ingrese Apellidos"
                                            name="apellidos" value="<?= $data->apellidos ?>" id="apellidos" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label>Correo<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                        <input type="text" class="form-control" placeholder="Ingrese Email" name="email"
                                            id="email" value="<?= $data->email ?>" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label>Celular<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                        <input type="text" class="form-control" placeholder="Ingrese número"
                                            name="celular" id="celular" value="<?= $data->celular ?>" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label>Servicio de interés<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                        <textarea class="form-control"
                                            placeholder="Mencioné el servicio de interés y si tiene alguna observación"
                                            name="servicio" id="servicio" required><?= $data->servicio ?></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-dark px-4 float-start mt-4"
                                        id="btnIngresar">Actualizar datos</button>
                                    <a class="btn btn-dark px-4 float-end mt-4" href="find.php">Salir</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



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