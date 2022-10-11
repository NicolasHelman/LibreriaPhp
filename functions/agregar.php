<?php
    require_once "../conexion.php";

    // almacenamos los datos recibidos del formulario en la variables
    $nombre = $_POST["nombre"];
    $autor = $_POST["autor"];
    $descripcion = $_POST["descripcion"];

    // verificamos que los datos no esten vacios
    if (empty($nombre) || empty($autor) || empty($descripcion)) {
        header("Location: ../pages/new.php?alert=incomplete");
        exit();
    }

    // con los ??? evitamos la inyeccion sql 
    $sql = $conexion -> prepare("INSERT INTO libro (nombre,autor,descripcion) VALUES (?,?,?)");

    $resultado = $sql -> execute([$nombre,$autor,$descripcion]);
    
    if ($resultado) {
        header("Location: ../index.php?alert=ok");
    } else {
        header("Location: ../index.php?alert=errordb");
        exit();
    }

    // como ya no vamos a utilizar la variable $resultado
    // le asignamos null para cerrar la conexion y liberar espacio en memoria
    $resultado=null;
    

?>