<?php
// Función para mostrar la lista de monitorias
function mostrarListaMaterias($monitorias) {
    echo '<div class="row">';
    foreach ($monitorias as $monitoria) {
        echo '<div class="col">
                <div class="card d-inline-block">
                  <img src="' . $monitoria['imagen'] . '" class="card-img-top" alt="' . $monitoria['asignatura'] . '">
                  <div class="card-body">
                    <h6 class="card-title" >Asignatura:</h6>' . $monitoria['asignatura'] .
                    '<h6 class="card-text">Monitor:</h6>' . $monitoria['monitor'] . 
                  '<br><a href="monitoria.php" class="btn btn-primary">Más información</a>
                  </div>
                </div>
              </div>';
    }
    echo '</div>';
}

// Ejemplo de array de monitorias con imágenes diferentes
$monitorias = array(
  array('asignatura' => 'Programación web', 'monitor' => 'Jhon Doe', 'imagen' => '../public/img/web.jpg'),
  array('asignatura' => 'Sistemas operativos', 'monitor' => 'Sebastian Gorge', 'imagen' => '../public/img/os.jpg'),
  array('asignatura' => 'Inteligencia artificial', 'monitor' => 'Gepeto', 'imagen' => '../public/img/ia.jpg')
);

// Llama a la función para mostrar la lista de monitorias
mostrarListaMaterias($monitorias);
?>
