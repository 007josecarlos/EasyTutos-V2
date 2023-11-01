<?php include 'header.php'; ?>

<!-- Barra de navegación dasbohar -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../public/img/logo.png" width="40" height="40" class="d-inline-block align-text-top">
            EasyTutos
        </a>
        <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" class="border rounded-3 p-1 text-decoration-none">
            <i class="bi bi-list bi-lg py-2 p-1"></i>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">

            </ul>

            <ul class="navbar-nav ml-auto me-5">
                <li class="nav-item">
                    <a class="nav-link px-3" href="#">
                    <span class="material-icons">notifications</span>
                        <span class="badge badge-pill badge-warning position-absolute">10</span>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav me-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        <img src="https://randomuser.me/api/portraits/men/94.jpg" alt="John Doe" width="40"
                            class="border mp-1 rounded-circle">
                        Jose Caceres
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-user fa-fw"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-fw"></i> Logout</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto px-0">
            <div id="sidebar" class="collapse collapse-horizontal show border-end">
                <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar">
                        <i class="material-icons">home</i>
                        <span>Home</span> 
                    </a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar">
                        <i class="material-icons">local_library</i>
                        <span>Asignaturas</span> 
                    </a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar">
                        <i class="material-icons">people</i>
                        <span>Monitores</span>
                    </a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar">
                        <i class="material-icons">notifications</i>
                        <span>Notificaciones</span>
                    </a>
                </div>
            </div>
        </div>
        <main class="col ps-md-2 pt-2">
            <div class="page-header pt-3">
                <?php include 'card.php'; ?>
            </div>
        </main>
    </div>
</div>
<?php include 'footer.php'; ?>
