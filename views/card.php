<!-- Sección de tarjetas -->
<?php
// Función para mostrar la lista de monitores
function mostrarListaMonitores($monitores) {
    echo '<div class="row">';
    foreach ($monitores as $monitores) {
        echo '<div class="col">
                <div class="card d-inline-block">
                  <img src="../public/img/card1.jpeg" class="card-img-top" alt="Monitor 1">
                  <div class="card-body">
                    <h6 class="card-title" >Monitor:</h6>' . $monitores['monitor'] .
                    '<h6 class="card-text">Asignaturas:</h6>' . $monitores['asignatura'] . 
                  '<br><a href="monitor.php" class="btn btn-primary">Más información</a>
                  </div>
                </div>
              </div>';
    }
    echo '</div>';
}

// Ejemplo de array de monitores
$monitores = array(
  array('asignatura' => 'Programación web', 'monitor' => 'Jhon Doe'),
  array('asignatura' => 'Sistemas operativos', 'monitor' => 'Sebastian Gorge'),
  array('asignatura' => 'Inteligencia artificial', 'monitor' => 'Gepeto')
);

// Llama a la función para mostrar la lista de monitores
  mostrarListaMonitores($monitores);
?>