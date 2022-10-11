<?php

    include "../includes/link.php";

    include "../includes/navbar.php";

    require_once "../conexion.php";

    if (!isset($_GET["id"])) {
        header("Location: 404.php");
        exit();
    }

    $id = $_REQUEST["id"];

    $sql = $conexion -> prepare("SELECT * FROM libro WHERE id = ?");

    $sql -> execute([$id]);

    $fila = $sql -> fetch(PDO::FETCH_OBJ);

?>

<section class="gradient-custom">
    <div class="container mt-3">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <?php include "../includes/btn_back.php" ?>
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center fw-bold">Editar Libro</h3>

                        <form action="../functions/editar.php" method="POST">
                            <div class="row">

                                <input type="hidden" class="form-control" id="nombre" name="id" value="<?php echo $fila -> id ?>">

                                <div class="mb-3">
                                    <div class="form-outline">
                                        <label for="nombre" class="col-form-label">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $fila -> nombre ?>">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-outline">
                                        <label for="autor" class="col-form-label">Autor:</label>
                                        <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $fila -> autor ?>">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-outline">
                                        <label for="descripcion" class="col-form-label">Descripción:</label>
                                        <input class="form-control" id="descripcion" name="descripcion" value="<?php echo $fila -> descripcion ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 text-center">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill">Guardar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include "../includes/script.php";
?>