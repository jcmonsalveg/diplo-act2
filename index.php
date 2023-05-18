<?php

include_once('config/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ROOT ?>/css/index.css">
</head>

<body>

    <div class="container">
        <?php
        include('pages/navbar.php')
        ?>

        <!-- Cards -->
        <p>
        <h1>Servicios</h1>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="img/servicio1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Desarrollo a la medida</h5>
                        <p class="card-text">Desarrollamos el software a la medida que atiende a tus necesidades
                            específicas o a las de tu empresa.
                        </p>
                        <a href="<?= ROOT ?>/pages/servicios.php#desarrollo-web" class="btn btn-dark">Leer más...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="img/servicio2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Migración de tecnología</h5>
                        <p class="card-text">¿Requieres escalar tus soluciones y migrar a sistemas más robustos?,
                            tenemos la solución ideal para ti.
                        </p>
                        <a href="<?= ROOT ?>/pages/servicios.php#migra-tecno" class="btn btn-dark">Leer más...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="img/servicio3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Asesoría empresarial</h5>
                        <p class="card-text">Tanto si requieres mejorar tu arquitectura tecnológica como si deseas
                            comenzar un nuevo proyecto empresarial.
                        </p>
                        <a href="<?= ROOT ?>/pages/servicios.php#aser-empre" class="btn btn-dark">Leer más...</a>
                    </div>
                </div>
            </div>
        </div>
        </p>
        <!-- Cards -->

        <!-- Information -->
        <div class="porque">
            <h1>¿Por qué elegirnos?</h1>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <p>
                        Nuestra empresa tiene una amplia trayectoria en el mercado, con años de experiencia en el
                        desarrollo de soluciones tecnológicas a medida para nuestros clientes. Contamos con un equipo
                        altamente capacitado y actualizado en las últimas tecnologías, lo que nos permite ofrecer
                        soluciones innovadoras y de alta calidad. Nos enfocamos en entender las necesidades específicas
                        de cada cliente y en brindar un servicio personalizado que se adapte a sus requerimientos.
                        Además, nos comprometemos con la satisfacción de nuestros clientes y trabajamos en equipo con
                        ellos para asegurarnos de que su proyecto sea un éxito
                    </p>
                </div>
                <div class="col-md-6">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/F0UclptaSdA"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- Information -->

        <!-- Carousel -->
        <h1>Proyectos Desarrollados</h1>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= ROOT ?>/img/proyecto1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Software Contable</h5>
                        <p>Sistema de información desarrollado con microservicios en java, angular, postgreSQL</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= ROOT ?>/img/proyecto2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Migración a la nube tienda virtual</h5>
                        <p>Migración de sistema de información en .net a nube aws</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= ROOT ?>/img/proyecto3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Sistematización supermercado</h5>
                        <p>Sistematizacion de procesos manuales a un software de control de inventarios</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel -->

        <?php
        include('pages/footer.php')
        ?>               
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>