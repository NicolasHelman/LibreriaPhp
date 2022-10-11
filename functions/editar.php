<?php
    require_once "../conexion.php";

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $autor = $_POST["autor"];
    $descripcion = $_POST["descripcion"];

    // verificamos que los datos no esten vacios
    if (empty($id) || empty($nombre) || empty($autor) || empty($descripcion)) {
        header("Location: ../index.php?alert=error");
        exit();
    }

    $sql = $conexion -> prepare("UPDATE libro SET nombre = ?, autor = ?, descripcion = ? WHERE id = ?");

    $resultado = $sql -> execute([$nombre,$autor,$descripcion,$id]);

    if ($resultado) {
        header("Location: ../index.php?alert=update");
    } else {
        header("Location: ../index.php?alert=errordb");
        exit();
    }

    // como ya no vamos a utilizar la variable $resultado
    // le asignamos null para cerrar la conexion y liberar espacio en memoria
    $resultado=null;

?>