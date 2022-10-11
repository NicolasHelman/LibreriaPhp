<?php

    include "../link.php";

    include "../navbar.php";

?>

<?php 
    require_once "alerts.php";
?>

<section class="gradient-custom">
    <div class="container mt-3">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <?php include "../btn_back.php" ?>
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center fw-bold">Agregar Libro</h3>

                        <form action="../functions/agregar.php" method="POST">
                            <div class="row">

                                <div class="mb-3">
                                    <div class="form-outline">
                                        <label for="nombre" class="col-form-label">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-outline">
                                        <label for="autor" class="col-form-label">Autor:</label>
                                        <input type="text" class="form-control" id="autor" name="autor">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-outline">
                                        <label for="descripcion" class="col-form-label">Descripción:</label>
                                        <input type="text" class="form-control" id="descripcion" name="descripcion">
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

    include "../script.php";

?>