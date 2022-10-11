<!-- Alerta Ok Agregar Libro -->
<?php
    // si existe una variable que viaja via GET por la url
    if (isset($_GET["alert"]) && $_GET["alert"] == "ok") {
?>
<div class="d-flex alert alert-success alert-dismissible fade show mx-auto mt-3 w-25" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong><i class="fas fa-check-circle me-1"></i>Libro Registrado</strong>
</div>
<?php
    }
?>

<!-- Alerta Incomplete Agregar Libro -->
<?php
    // si existe una variable que viaja via GET por la url
    if (isset($_GET["alert"]) && $_GET["alert"] == "incomplete") {
?>
<div class="d-flex alert alert-danger alert-dismissible fade show mx-auto mt-3 w-25" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong><i class="fas fa-exclamation-circle me-1"></i>Campos incompletos</strong>
</div>
<?php
    }
?>

<!-- Alerta Update Editar Libro -->
<?php
    // si existe una variable que viaja via GET por la url
    if (isset($_GET["alert"]) && $_GET["alert"] == "update") {
?>
<div class="d-flex alert alert-warning alert-dismissible fade show mx-auto mt-3 w-25" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong><i class="fas fa-sync-alt me-1"></i>Libro Actualizado</strong>
</div>
<?php
    }
?>

<!-- Alerta Error Actualizar Libro -->
<?php
    // si existe una variable que viaja via GET por la url
    if (isset($_GET["alert"]) && $_GET["alert"] == "error") {
?>
<div class="d-flex alert alert-danger alert-dismissible fade show mx-auto mt-3 w-25" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong><i class="fas fa-exclamation-circle me-1"></i>No se pudo actualizar el libro</strong>
</div>
<?php
    }
?>

<!-- Alerta Delete Eliminar Libro -->
<?php
    // si existe una variable que viaja via GET por la url
    if (isset($_GET["alert"]) && $_GET["alert"] == "delete") {
?>
<div class="d-flex alert alert-danger alert-dismissible fade show mx-auto mt-3 w-25" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong><i class="fas fa-trash-alt me-1"></i>Libro Eliminado</strong>
</div>
<?php
    }
?>

<!-- Alerta Error Base de Datos -->
<?php
    // si existe una variable que viaja via GET por la url
    if (isset($_GET["alert"]) && $_GET["alert"] == "errordb") {
?>
<div class="d-flex alert alert-danger alert-dismissible fade show mx-auto mt-3 w-25" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong><i class="fas fa-exclamation-circle me-1"></i>Error en la Base de Datos</strong>
</div>
<?php
    }
?>

<!-- Alerta Not Found Busqueda -->
<?php
    // si existe una variable que viaja via GET por la url
    if (isset($_GET["alert"]) && $_GET["alert"] == "notfound") {
?>
<div class="d-flex alert alert-danger alert-dismissible fade show mx-auto mt-3 w-25" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong><i class="fas fa-exclamation-circle me-1"></i>Libro no encontrado</strong>
</div>
<?php
    }
?>