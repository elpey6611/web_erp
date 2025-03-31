<?php
require 'includes/funciones.php';
incluirTemplate('header');
incluirTemplate('pub_var');
?>


<main class="contenedor seccion">
    <h1>Eliminar</h1>
    <a href="<?php echo 'admin\index.php' ?> " class="boton boton-verde">
        Regresar
    </a>
</main>

<?php
incluir_nfrm(legen_footer("crear.php"));
incluirTemplate('footer');
?>