<!-- Sección de tarjetas -->
<?php
// Función para mostrar la lista de monitorias
function mostrarListaMaterias($monitorias) {
    echo '<div class="row">';
    foreach ($monitorias as $monitorias) {
        echo '<div class="col">
                <div class="card d-inline-block">
                  <img src="../public/img/card1.jpeg" class="card-img-top" alt="Monitor 1">
                  <div class="card-body">
                    <h6 class="card-title" >Asignatura:</h6>' . $monitorias['asignatura'] .
                    '<h6 class="card-text">Monitor:</h6>' . $monitorias['monitor'] . 
                  '<br><a href="monitoria.php" class="btn btn-primary">Más información</a>
                  </div>
                </div>
              </div>';
    }
    echo '</div>';
}

// Ejemplo de array de monitorias
$monitorias = array(
  array('asignatura' => 'Programación web', 'monitor' => 'Jhon Doe'),
  array('asignatura' => 'Sistemas operativos', 'monitor' => 'Sebastian Gorge'),
  array('asignatura' => 'Inteligencia artificial', 'monitor' => 'Gepeto')
);

// Llama a la función para mostrar la lista de monitorias
  mostrarListaMaterias($monitorias);
?>