<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div class="container mt-5">
  <div class="row">
    <!-- Imagen -->
    <div class="col-md-6">
      <img src="../public/img/login.webp" alt="Imagen de inicio de sesión" class="img-fluid rounded shadow">
    </div>

    <div class="col-md-6">
      <!-- Título de la sección -->
      <div class="mb-4">
        <h2 class="display-4">¡Bienvenido de vuelta!</h2>
        <p class="lead">Inicia sesión para acceder a tu cuenta.</p>
      </div>

      <!-- Formulario de inicio de sesión -->
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

      <div class="mt-3">
        <p>¿No tienes una cuenta? <a href="registrarse.php">Regístrate aquí</a>.</p>
      </div>
    </div>
  </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../public/Js/logica/login.js"></script>
<script src="../public/Js/librerias/sweetalert2.min.js"></script>
<?php include 'footer.php'; ?>
