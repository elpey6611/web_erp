<?php
require 'incluir/funciones.php';
include 'plantillas/pub_var.php';
$miruta = obtener_path();
incluirTemplate('header', $miruta);


?>

<main class="contenedor seccion">

    <h2>Casas y Depas en Venta</h2>

    <?php
    $limite = 10;
    include 'plantillas/anuncios.php';
    ?>

</main>

<?php
incluir_nfrm(legen_footer("anuncios.php  (en raiz)"));
incluirTemplate('footer', $miruta);
?>