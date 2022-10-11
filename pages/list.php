<?php 
    require_once "alerts.php";
?>

<div class="container">

    <div class="mx-auto w-75 mt-5">

        <div class="">
            <a href="./pages/new.php" class="btn btn-success rounded-pill">
                Agregar Libro<i class="fas fa-plus ms-2"></i>
            </a>
        </div>

        <div class="mt-3">
            <form action="./pages/search.php" method="POST" autocomplete="off" >
                <input type="hidden" name="modulo_buscador" value="usuario">
                <div class="input-group rounded-pill">
                    <input class="input form-control" id="busqueda" name="busqueda" type="search" placeholder="Buscar libro" aria-label="Search" aria-describedby="search-addon">
                    <button type="submit" class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>

    </div>

    <table class="table align-middle mb-0 bg-white mx-auto w-75 mt-4">

        <thead class="bg-light">
            <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Autor</th>
            <th>Descripción</th>
            <th colspan="2">Acciones</th>
            </tr>
        </thead>

        <tbody>

            <?php

                include "conexion.php";

                $sql = $conexion -> query("SELECT * FROM libro");
                // PDO::FETCH_OBJ -> con PDO le doy un formato adecuado para que pueda verse
                $fila = $sql -> fetchAll(PDO::FETCH_OBJ);

                foreach ($fila as $dato) {
                    
            ?>

            <tr>
                <td><?php echo $dato -> id ?></td>
                <td><?php echo $dato -> nombre ?></td>
                <td><?php echo $dato -> autor ?></td>
                <td><?php echo $dato -> descripcion ?></td>
                <td>
                    <a href="./pages/update.php?id=<?php echo $dato -> id ?>" class="btn btn-warning rounded-pill">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a onclick="return confirm('¿Está seguro que desea eliminar el libro?')" href="./functions/eliminar.php?id=<?php echo $dato -> id ?>" class="btn btn-danger rounded-pill">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
            </tr>

            <?php
                }
            ?>
        </tbody>
    </table>

</div>