<?php

include_once('../../config/config.php');
include('Usuario.php');

$u = new Usuario();
$data = $u->findAll();


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
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                            echo "<td><a class='btn btn-dark' href='#'> Modificar </a> </td>";
                            echo "<td><a class='btn btn-danger' href='#'> Eliminar </a> </td>";
                            echo "<tr>";
                        }
                        ?>
                    </tbody>
                </table>




            </div>
        </div>

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