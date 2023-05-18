<?php

include('../../config/config.php');
include('Usuario.php');

if (isset($_POST) && !empty($_POST)) {
    $u = new Usuario();
    $login = mysqli_fetch_object($u->login($_POST));

    if (!empty($login)) {
        header('Location: ' . 'find.php');
    } else {
        $mensaje = '<div class ="alert alert-danger"> Usuario y/o clave incorrectos</div> ';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ROOT ?>/css/login.css">
</head>

<body>

    <div class="container">
        <?php
        include('../navbar.php')
            ?>

        <!-- Login -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <br>
                <?php
                if (isset($mensaje)) {
                    echo $mensaje;
                }
                ?>
                <h3 class="mb-2 footer-links">Iniciar Sesión</h3>
                <div class="row">
                    <div class="col-md-12 pe-0">
                        <div class="form-left h-100 py-5 px-5">
                            <form method="POST" enctype="multipart/form-data" class="row g-4">
                                <div class="col-12">
                                    <label>Usuario<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                        <input type="text" class="form-control" placeholder="Ingrese Usuario"
                                            id="username" name="usuario" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label>Contraseña<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                        <input type="password" class="form-control" placeholder="Ingrese Contraseña"
                                            id="contrasena" name="contrasena" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <!-- <a class="btn btn-dark px-4 float-start mt-4" href="<?= ROOT ?>/pages/usuario/find.php">Ingresar</a> -->
                                    <button type="submit" class="btn btn-dark px-4 float-start mt-4"
                                        id="btnIngresar">Ingresar</button>

                                    <a class="btn btn-dark px-4 float-end mt-4"
                                        href="<?= ROOT ?>/pages/usuario/add.php">Registrar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="login-error" class="alert alert-danger d-none" role="alert">Usuario o contraseña incorrectos
                </div>


            </div>
        </div>
        <!-- Login -->

        <?php
        include('../footer.php')
            ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>