<?php

include_once('../../config/config.php');
include('Usuario.php');

if (isset($_POST) && !empty($_POST)) {
  $u = new Usuario();
  $save = $u->save($_POST);

  if ($save) {
    $mensaje = '<div class ="alert alert-success"> Usuario registrado</div> ';
  } else {
    $mensaje = '<div class ="alert alert-danger"> Error</div> ';
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
  <link rel="stylesheet" href="css/index.css">
</head>

<body>


  <div class="container">

    <?php
    if (isset($mensaje)) {
      echo $mensaje;
    }
    ?>



    <h1>Registro de usuarios</h1>

    <form method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Password">
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" name="nombres" id="nombres" placeholder="Nombres">
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos">
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
      </div>

      <button type="submit" class="btn btn-success">Registrar usuario</button>
    </form>

  </div>


</body>

</html>