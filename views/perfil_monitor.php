<?php session_start(); ?>
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<!-- Título de la sección -->
<div class="container mt-5 d-flex flex-column align-items-center">
  <h2>Tu perfil</h2>
</div>

<div class="container mt-5 mb-5">
  <div class="row">
    <!-- Datos monitor -->
    <div class="col-sm-6">
      <h4>Nombre: Jhon Doe</h4>
      <h4>Asignaturas: Sistemas operativos II</h4>
      <h4>Correo electronico: alguien@domain.com</h4>
      <h4>Numero de telefono: 123 45678910</h4>
      <h4>Estado: activo</h4>
    </div>
    <!-- Foto monitor -->
    <div class="col-sm-6">
      <img src="../public/img/sinImagen.png" alt="Foto del monitor" class="img-fluid"/>
    </div>
  </div>
  <div class="container mt-5 mb-5">
    <div class="twoButtons">
        <button class="blue-button" href="editar_perfil_monitor.php">Editar perfil</button>
        <button class="orange-button">Eliminar perfil</button>
    </div>
  </div>
  <div class="section-header">
    <h3>Monitorias:</h3>
    <h2 class="plusButton" href="crear_monitoria.php">+</h2>
  </div>
</div>

<?php include 'card-monitorias.php'; ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../public/Js/librerias/sweetalert2.min.js"></script>
<!--<script src="../public/Js/librerias/jquery-3.6.0.min.js"></script>-->
<?php include 'footer.php'; ?>