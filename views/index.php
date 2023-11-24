
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<?php include 'slider.php'; ?>
<!-- monitores -->
<div class="container mt-5 mb-5"> 
    <div class="d-flex flex-column align-items-center"> 
        <h2> Buscar monitores</h2>
        <!-- Barra de búsqueda -->
        <form class="mb-5">
            <input class="form-control" type="search" placeholder="Buscar monitores" aria-label="Buscar">
        </form>
    </div>
    <?php include 'card.php'; ?>
</div>
<!-- monitorias -->
<div class="container mt-5 mb-5"> 
    <div class="d-flex flex-column align-items-center"> 
        <h2> Buscar monitorias</h2>
        <!-- Barra de búsqueda -->
        <form class="mb-5">
            <input class="form-control" type="search" placeholder="Buscar por asignatura" aria-label="Buscar">
        </form>
    </div>
    <?php include 'card-asignaturas.php'; ?>
</div>
<?php include 'footer.php'; ?>