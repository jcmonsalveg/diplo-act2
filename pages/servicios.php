<?php

include_once('../config/config.php');

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
    <link rel="stylesheet" href="<?= ROOT ?>/css/servicios.css">
</head>

<body>

    <div class="container">

        <?php
        include('navbar.php')
        ?>

        <p>
        <h1>Conoce nuestros servicios</h1>
        </p>

        <div class="desarrollo">
            <div class="container">
                <div id="desarrollo-web">
                    <h2>Desarrollo web</h2>
                    <div class="row">
                        <div class="col">
                            En nuestra empresa, ofrecemos servicios de desarrollo web personalizados y adaptados a las
                            necesidades de cada cliente. Contamos con un equipo de profesionales altamente capacitados
                            en
                            las últimas tecnologías de programación y diseño web, lo que nos permite crear sitios web
                            modernos, atractivos y funcionales. Nos enfocamos en garantizar una excelente experiencia de
                            usuario, optimizando la velocidad de carga, la navegación intuitiva y la accesibilidad en
                            todo
                            tipo de dispositivos. Además, trabajamos en colaboración con nuestros clientes en cada etapa
                            del
                            proyecto, desde la planificación hasta la implementación y el mantenimiento posterior, para
                            asegurarnos de que el resultado final cumpla con todas sus expectativas y requerimientos
                        </div>
                        <div class="col">
                            <img src="../img/desarrollo.jpg" class="img-fluid" alt="...">

                        </div>
                    </div>
                </div>
                <div id="migra-tecno">
                    <div class="h2-right">
                        <p>
                        <h2>Migración de tecnología</h2>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="../img/migracion.jpg" class="img-fluid" alt="...">

                        </div>
                        <div class="col">
                            En nuestra empresa, ofrecemos servicios de migración de tecnología para ayudar a nuestros
                            clientes a mantenerse actualizados en un mundo en constante evolución. Contamos con un
                            equipo de
                            expertos altamente capacitados en la migración de sistemas y aplicaciones a nuevas
                            plataformas y
                            tecnologías, lo que nos permite ofrecer soluciones eficientes y efectivas. Trabajamos en
                            estrecha colaboración con nuestros clientes para comprender sus necesidades específicas y
                            crear
                            un plan personalizado de migración que minimice los tiempos de inactividad y maximice la
                            eficiencia y la seguridad del sistema. Además, ofrecemos soporte continuo después de la
                            migración para garantizar que todo funcione sin problemas y satisfacer las necesidades
                            cambiantes de nuestros clientes
                        </div>

                    </div>
                </div>
                <div id="aser-empre">
                    <p>
                    <h2>Asesoría empresarial</h2>
                    </p>
                    <div class="row">

                        <div class="col">
                            En nuestra empresa, ofrecemos servicios de asesoría empresarial en tecnología para ayudar a
                            nuestros clientes a tomar decisiones informadas sobre cómo utilizar la tecnología para
                            mejorar
                            su negocio. Contamos con un equipo de expertos en tecnología y negocios que pueden ayudar a
                            identificar oportunidades y desafíos clave, así como a desarrollar estrategias efectivas y
                            personalizadas para aprovechar al máximo la tecnología. Ya sea que necesite ayuda con la
                            planificación estratégica, la optimización de procesos, la selección de software o cualquier
                            otra cosa relacionada con la tecnología empresarial, nuestro equipo está aquí para brindarle
                            el
                            conocimiento y la experiencia que necesita para alcanzar el éxito. Trabajamos en estrecha
                            colaboración con nuestros clientes para comprender sus necesidades y objetivos específicos,
                            y
                            para crear soluciones prácticas y rentables que los ayuden a alcanzarlos
                        </div>
                        <div class="col">
                            <img src="../img/asesoria.jpg" class="img-fluid" alt="...">

                        </div>
                    </div>
                </div>
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