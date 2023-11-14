<?php session_start(); ?>
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<!-- Título de la sección -->
<div class="container mt-5 d-flex flex-column align-items-center">
  <h2>Registrate como monitor</h2>
</div>

<div class="container mt-5 mb-5">
  <div class="row">
    <!-- Imagen -->
    <div class="col-sm-6">
      <img src="../public/img/login.webp" alt="Imagen de registrarse" class="img-fluid">
    </div>
    <!-- Formulario de inicio de sesión -->
    <div class="col-sm-6">
      <form>
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" required>
        </div>

        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="apellido" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Confirmar contraseña</label>
          <input type="password" class="form-control" id="passwordRepeat" required>
        </div>

        <div class="mb-3">
          <label for="num-tel" class="form-label">Numero de telefono</label>
          <input type="text" class="form-control" id="num-tel" required>
        </div>

        <button type="button" class="btn btn-primary" onclick="verificarRegistro()">Registrar</button>
      </form>
    </div>
  </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../public/Js/logica/registrarse.js"></script>
<script src="../public/Js/librerias/sweetalert2.min.js"></script>
<!--<script src="../public/Js/librerias/jquery-3.6.0.min.js"></script>-->
<?php include 'footer.php'; ?>
