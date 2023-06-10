<!-- Navbar -->
<header id="main-header">
    <div class="banner">
        <img src="<?= ROOT ?>/img/baner.png" width="100%" height="300">
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= ROOT ?>/index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-color" href="<?= ROOT ?>/pages/servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-color" href="<?= ROOT ?>/pages/usuario/login.php">Login</a>
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