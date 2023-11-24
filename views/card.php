<?php
// Función para mostrar la lista de monitores
function mostrarListaMonitores($monitores) {
    echo '<div class="row">';
    foreach ($monitores as $monitor) {
        echo '<div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                  <img src="' . $monitor['imagen'] . '" class="card-img-top rounded" alt="' . $monitor['monitor'] . '">
                  <div class="card-body">
                    <h5 class="card-title text-primary">' . $monitor['monitor'] . '</h5>
                    <p class="card-text"><strong>Asignatura:</strong> ' . $monitor['asignatura'] . '</p>
                    <a href="monitor.php" class="btn btn-primary">Más información</a>
                  </div>
                </div>
              </div>';
    }
    echo '</div>';
}

// Ejemplo de array de monitores con imágenes diferentes
$monitores = array(
  array('asignatura' => 'Programación web', 'monitor' => 'Jhon Doe', 'imagen' => '../public/img/monitor1.jpeg'),
  array('asignatura' => 'Sistemas operativos', 'monitor' => 'Sebastian Gorge', 'imagen' => '../public/img/monitor2.jpg'),
  array('asignatura' => 'Inteligencia artificial', 'monitor' => 'Gepeto', 'imagen' => '../public/img/monitor3.jpg')
);

// Llama a la función para mostrar la lista de monitores
mostrarListaMonitores($monitores);
?>
