<?php
// Función para mostrar la lista de materias
function mostrarListaMaterias($materias) {
    echo '<div class="row">';
    foreach ($materias as $materia) {
        echo '<div class="col">
                <div class="card d-inline-block">
                  <img src="../public/img/ia.jpg" class="card-img-top" alt="' . $materia . '">
                  <div class="card-body">
                    <h6 class="card-title" >Asignatura:</h6>' . $materia .
                    '<div class="container mt-5 mb-5">
                      <div class="twoButtons">
                        <h6 class="card-text"><a href="editar.php">Editar</a></h6>
                        <h6 class="card-text"><a href="eliminar.php">Eliminar</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>';
    }
    echo '</div>';
}

// Ejemplo de array de materias
$materias = array('Programación web', 'Sistemas operativos', 'Inteligencia artificial');

// Llama a la función para mostrar la lista de materias
echo '<div class="container mt-5 mb-5">';
  mostrarListaMaterias($materias);
echo '</div>';
?>
