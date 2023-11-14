<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<!-- Título de la sección -->
<div class="container mt-5 d-flex flex-column align-items-center">
  <h2>Iniciar sesión</h2>
</div>

<div class="container mt-5 mb-5">
  <div class="row">
    <!-- Imagen -->
    <div class="col-sm-6">
      <img src="../public/img/login.webp" alt="Imagen de inicio de sesión" class="img-fluid">
    </div>
    <!-- Formulario de inicio de sesión -->
    <div class="col-sm-6">
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" required>
        </div>
        <button type="button" class="btn btn-primary" id="login">Ingresar</button>
      </form>
    </div>
  </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../public/Js/logica/login.js"></script>
<script src="../public/Js/librerias/sweetalert2.min.js"></script>
<!--<script src="../public/Js/librerias/jquery-3.6.0.min.js"></script>-->
<?php include 'footer.php'; ?>
