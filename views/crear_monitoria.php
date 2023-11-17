<?php session_start(); ?>
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<!-- Título de la sección -->
<div class="container mt-5 d-flex flex-column align-items-center">
  <h2>Titulo de monitoria</h2>
</div>

<div class="container mt-5 mb-5">
  <div class="row">
    <!-- Datos monitoria -->
    <div class="col-sm-6">
      <form>
        <label for="title">Titulo:</label><br>
        <input type="text" id="title" name="titulo" value="Nueva monitoria"><br><br>
        <label for="subject">Materia:</label><br>
        <select id="subject" name="materia">
          <option value="SO">Sistemas operativos</option>
          <option value="Web">Programacion web</option>
          <option value="IA">Inteligencia artificial</option>
          <option value="CalVec">Calculo vectorial</option>
        </select><br><br>
        <label for="time">Franja horaria:</label><br>
        <input type="text" id="time" name="franja" value="2:00 PM - 6:00 PM"><br><br>
        <label for="location">Ubicación:</label><br>
        <input type="text" id="location" name="ubicacion" value=""><br><br>
      </form>
    </div>
    <!-- Foto monitoria -->
    <div class="col-sm-6">
      <img src="../public/img/sinImagen.png" alt="Foto de la monitoria" class="img-fluid"/>
    </div>
  </div>
  <div class="container mt-5 mb-5">
    <div class="twoButtons">
        <button class="blue-button" href="perfil_monitor.php">Guardar</button>
        <button class="orange-button" href="perfil_monitor.php">Cancelar</button>
    </div>
  </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../public/Js/librerias/sweetalert2.min.js"></script>
<!--<script src="../public/Js/librerias/jquery-3.6.0.min.js"></script>-->
<?php include 'footer.php'; ?>