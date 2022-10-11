<?php
    require_once "../conexion.php";

    if (!isset($_GET["id"])) {
        header("Location: ../pages/404.php");
        exit();
    }

    $id = $_GET["id"];

    $sql = $conexion -> prepare("DELETE FROM libro WHERE id = ?");

    $resultado = $sql -> execute([$id]);

    if ($resultado) {
        header("Location: ../index.php?alert=delete");
    } else {
        header("Location: ../index.php?alert=errordb");
        exit();
    }

    // como ya no vamos a utilizar la variable $resultado
    // le asignamos null para cerrar la conexion y liberar espacio en memoria
    $resultado=null;

?>