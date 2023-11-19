<?php
session_start();

?>


<?php include 'header.php'; ?>

<!-- Barra de navegación dasbohar -->
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../public/img/logo.png" width="40" height="40" class="d-inline-block align-text-top">
      EasyTutos
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto">

        <li class="nav-item">
          <a class="nav-link" href="#">Monitores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Asignaturas</a>
        </li>
   
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://randomuser.me/api/portraits/men/94.jpg" alt="John Doe" width="40" class="border mp-1 rounded-circle">
            <?php if (isset($_SESSION['usuario'])){ echo $_SESSION['nombre'];}?>
          </a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><i class="fas fa-user fa-fw"></i> Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-fw"></i> Logout</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>


<div class="container-fluid">
    <div class="row flex-nowrap">
        <main class="col ps-md-2 pt-2">
            <div class="page-header pt-3">
                <?php include 'card.php'; ?>
            </div>
        </main>
    </div>
</div>
<?php include 'footer.php'; ?>
