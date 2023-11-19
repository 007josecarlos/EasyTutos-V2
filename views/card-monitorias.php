<!-- Sección de tarjetas -->
<?php
// Función para mostrar la lista de materias
function mostrarListaMaterias($materias) {
    echo '<div class="row">';
    foreach ($materias as $materias) {
        echo '<div class="col">
                <div class="card d-inline-block">
                  <img src="../public/img/card1.jpeg" class="card-img-top" alt="Monitor 1">
                  <div class="card-body">
                    <h6 class="card-title" >Asignatura:</h6>' . $materias .
                    '<div class="container mt-5 mb-5">
                    <div class="twoButtons">
                      <h6 class="card-text">Editar</h6>
                      <h6 class="card-text">Eliminar</h6>
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