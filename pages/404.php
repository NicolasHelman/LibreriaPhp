<?php
    include "../link.php";
    include "../navbar.php";
?>

<div class="main-container container">
    <div class="error404">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mt-4">
                    <img class="mt-4 img-error w-75" src="../img/error-404-monochrome.svg"/>
                    <p class="lead mt-2">La URL solicitada no se encontró en este servidor.</p>
                    <a class="btn btn-primary rounded-pill mt-2" href="../index.php"><i class="fas fa-arrow-left me-2"></i>Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "../script.php";
?>