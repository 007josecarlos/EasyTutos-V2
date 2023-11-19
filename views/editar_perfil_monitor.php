<?php session_start(); ?>
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
            Jose Caceres
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

<!-- Título de la sección -->
<div class="container mt-5 d-flex flex-column align-items-center">
  <h2>Editando perfil</h2>
</div>

<div class="container mt-5 mb-5">
  <div class="row">
    <!-- Datos monitor -->
    <div class="col-sm-6">
      <label for="name">Nombre: </label>
      <input type="text" id="name" name="name" value=""><br><br>
      <!-- <h4>Asignaturas: Sistemas operativos II</h4>-->
      <h4>Correo electronico: alguien@domain.com</h4>
      <label for="phone">Númeor de teléfono: </label>
      <input type="text" id="phone" name="phone" value=""><br><br>
      <h4>Estado: activo</h4>
    </div>
    <!-- Foto monitor -->
    <div class="col-sm-6">
      <img src="../public/img/sinImagen.png" alt="Foto de la monitoria" class="img-fluid"/>
    </div>
  </div>
  <div class="container mt-5 mb-5">
    <div class="twoButtons">
        <button class="orange-button" onclick="window.location.href='perfil_monitor.php'">Cancelar</button>
        <button class="blue-button">Guardar cambios</button>
    </div>
  </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../public/Js/librerias/sweetalert2.min.js"></script>
<!--<script src="../public/Js/librerias/jquery-3.6.0.min.js"></script>-->
<?php include 'footer.php'; ?>
