<?php
require 'incluir/funciones.php';
include 'plantillas/pub_var.php';
$miruta = obtener_path();
incluirTemplate('header', $miruta);

?>
<main class="contenedor seccion">
    <h1>Titulo Página</h1>
</main>

<?php
incluir_nfrm(legen_footer("index.php"));
incluirTemplate('footer', $miruta);
?>