<?php
require 'includes/funciones.php';
incluirTemplate('header');
incluirTemplate('pub_var');
?>


<main class="contenedor seccion">

    <h2>Casas y Depas en Venta</h2>

    <?php
    $limite_imagen = 10;
    include 'includes/templates/anuncios.php';
    ?>
</main>

<?php
incluir_nfrm(legen_footer("anuncios.php"));
incluirTemplate('footer');
?>