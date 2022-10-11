<p class="mt-3 ms-3">
	<a href="#" class="btn btn-secondary btn-back">
        <i class="fas fa-arrow-left"></i>
    </a>
</p>

<script type="text/javascript">
    // seleccionamos el boton mediante la clase
    let btn_back = document.querySelector(".btn-back");
    // capturamos el evento cuando le doy click al boton
    btn_back.addEventListener('click', function(e){
        // prevengo al darle click aunque en el href tenga una ruta
        e.preventDefault();
        // regreso a la ultima pagina que ha visto el navegador
        window.history.back();
    });
</script>