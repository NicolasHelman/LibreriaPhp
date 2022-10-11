<?php
    require_once "../conexion.php";

    $busqueda = $_POST["busqueda"];

    // verificamos que los datos no esten vacios
    if (empty($busqueda)) {
        header("Location: ../index.php?alert=incomplete");
        exit();
    }

    // con los ??? evitamos la inyeccion sql 
    $sql = $conexion -> query("SELECT * FROM libro WHERE (nombre LIKE '%$busqueda%' OR autor LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%') ORDER BY nombre ASC");

    $fila = $sql -> fetchAll(PDO::FETCH_OBJ);

    if (!$fila) {
        header("Location: ../index.php?alert=notfound");
        exit();
    }

?>