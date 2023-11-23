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
            <li><a class="dropdown-item" href="../controllers/accion/cerrarSesion.php"><i class="fas fa-sign-out-alt fa-fw"></i> Logout</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>


<!-- Título de la sección -->
<div class="container mt-5 d-flex flex-column align-items-center">
  <h2>Nueva Asignatura</h2>
</div>

<div class="container mt-5 mb-5">
<p><b> Agregar materia </b></p>
    <label for="materia">ingrese la nueva materia:</label>
    <input name="materia" type="text" id="materia"  required="required"><br><br>
    <label for="creditos">ingrese el numero de creditos de la materia:</label>
    <input name="creditos" type="text" id="creditos"  required="required"><br><br>
    <label for="semestre">ingrese el numero del semestre en el cual se deberia ver la materia:</label>
    <input name="semestre" type="text" id="semestre"  required="required"><br><br>
    <button type="button" onclick="verificarAsignatura()" class="modificarCorreo">Agregar</button><br><br>
    <div><button type="button" onclick="window.location.href='perfilAdmin.php'" class="btn btn-primary">Regresar</button></div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../public/Js/logica/agregarMateria.js"></script>
<script src="../public/Js/librerias/sweetalert2.min.js"></script>
<!--<script src="../public/Js/librerias/jquery-3.6.0.min.js"></script>-->
<?php include 'footer.php'; ?>