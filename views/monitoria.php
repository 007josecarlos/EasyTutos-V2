<?php 
  session_start(); 

?> 
  
<?php include 'header.php'; ?>
<!-- Barra de navegación dasbohar -->
<?php include 'nav.php'; ?>


<!-- Título de la sección -->
<div class="container mt-5 d-flex flex-column align-items-center">
  <h2>Información de la monitoria</h2>
</div>

<div class="container mt-5 mb-5">
  <div class="row">
    <!-- Datos monitoria -->
    <div class="col-sm-6">
      <h4>Asignatura: </h4>
      <h4>Franja horaria: </h4>
      <h4>Ubicación: </h4>
      <h4>Monitor: </h4>
      <h4>Calificación: </h4>
    </div>
    <!-- Foto monitoria -->
    <div class="col-sm-6">
      <img src="../public/img/sinImagen.png" alt="Foto de la monitoria" class="img-fluid"/>
    </div>
  </div>
  <div class="container mt-5 mb-5">
    <div class="twoButtons">
        <button class="orange-button">Calificar</button>
        <button class="blue-button" onclick="window.location.href='monitor.php'">Contactar monitor</button>
    </div>
  </div>
  <div class="section-header">
    <h3>Temas:</h3>
  </div>
</div>
<!-- Temas de la monitoria-->

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../public/Js/librerias/sweetalert2.min.js"></script>
<!--<script src="../public/Js/librerias/jquery-3.6.0.min.js"></script>-->
<?php include 'footer.php'; ?>
