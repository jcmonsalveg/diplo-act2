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
  <link rel="stylesheet" href="../../css/add.css">
</head>

<body>


  <div class="container">
    <!-- Navbar -->
    <header id="main-header">
      <div class="banner">
        <img src="../../img/baner.png" width="100%" height="300">
      </div>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="../../index.php">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link disabled" href="index.html">¿Quienes somos?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-color" href="../servicios.html">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="contactanos.html">Contáctanos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-color" href="../login.html">Login</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- Navbar -->


    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <br>
        <?php
        if (isset($mensaje)) {
          echo $mensaje;
        }
        ?>
        <h3 class="mb-2 footer-links">Registro de usuario</h3>
        <div class="row">
          <div class="col-md-12 pe-0">
            <div class="form-left h-100 py-5 px-5">
              <form method="POST" enctype="multipart/form-data" class="row g-4">
                <div class="col-12">
                  <label>Usuario<span class="text-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                    <input type="text" class="form-control" placeholder="Ingrese Usuario" name="usuario" id="usuario"
                      required>
                  </div>
                </div>

                <div class="col-12">
                  <label>Contraseña<span class="text-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                    <input type="password" class="form-control" placeholder="Ingrese Contraseña" name="contrasena"
                      id="contrasena" required>
                  </div>
                </div>
                <div class="col-12">
                  <label>Nombres<span class="text-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                    <input type="text" class="form-control" placeholder="Ingrese Nombres" name="nombres" id="nombres"
                      required>
                  </div>
                </div>
                <div class="col-12">
                  <label>Apellidos<span class="text-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                    <input type="text" class="form-control" placeholder="Ingrese Apellidos" name="apellidos"
                      id="apellidos" required>
                  </div>
                </div>
                <div class="col-12">
                  <label>Correo<span class="text-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                    <input type="text" class="form-control" placeholder="Ingrese Email" name="email" id="email"
                      required>
                  </div>
                </div>
                <div class="col-12">
                  <label>Celular<span class="text-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                    <input type="text" class="form-control" placeholder="Ingrese número" name="celular" id="celular"
                      required>
                  </div>
                </div>
                <div class="col-12">
                  <label>Servicio de interés<span class="text-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                    <textarea class="form-control"
                      placeholder="Mencioné el servicio de interés y si tiene alguna observación" name="servicio"
                      id="servicio" required></textarea>
                  </div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-dark px-4 float-start mt-4" id="btnIngresar">Guardar
                    datos</button>
                  <a class="btn btn-dark px-4 float-end mt-4" href="../login.html">Iniciar sesión</a>
                </div>
              </form>
            </div>
          </div>
        </div>



      </div>
    </div>

    <!-- <h1>Registro de usuarios</h1>

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
    </form> -->

    <!-- Footer -->
    <footer>
      <div class="footer">
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted">
          <!-- Section: Links  -->
          <section class="">
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row">
                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Content -->
                  <h6 class="text-uppercase fw-bold mb-4 footer-links">
                    <i class="fas fa-gem me-3"></i>B&J Software a la medida
                  </h6>
                  <div class="footer-links">
                    <p> Desarrollo web</p>
                    <p> Migración de tecnología </p>
                    <p> Asesoría empresarial</p>
                  </div>
                </div>
                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
                  <h6 class="text-uppercase fw-bold mb-4 footer-links">
                    <i class="fas fa-gem me-3"></i>TECNOLOGÍAS
                  </h6>
                  <div class="footer-links">
                    <ul class="footer-ul">
                      <li>Angular</li>
                      <li>React</li>
                      <li>Vue</li>
                      <li>Laravel</li>
                      <li>.Net</li>
                      <li>Java</li>
                      <li>Python</li>
                      <li>GO</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4 footer-links">
                    <i class="fas fa-gem me-3"></i>CONTÁCTANOS
                  </h6>
                  <div class="footer-links">
                    <p> Bogotá, calle 10 # 30-25</p>
                    <p> info@bj-software.com </p>
                    <p> + 01 234 567 88</p>
                    <p> + 01 234 567 89</p>
                  </div>

                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->

          <!-- Copyright -->
          <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
          </div>
          <!-- Copyright -->
        </footer>

      </div>
    </footer>
    <!-- Footer -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>