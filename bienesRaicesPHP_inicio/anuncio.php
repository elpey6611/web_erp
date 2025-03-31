<?php

$vid = $_GET['id'];

if (!$vid) {
    header('Location: ' . '../admin/index.php');
}


require 'incluir/funciones.php';
include 'plantillas/pub_var.php';
$miruta = obtener_path();
incluirTemplate('header', $miruta);

//importar base
require 'config/ado_db.php';
require 'config/dbconexion.php';
$cnn = conectardb();
//consulta query
$vsql0 = "";
$vsql0 = "select * from tb_propiedades";
$vsql0 .= " where fcod_propiedades ='" .  $vid . "'";
//obtener resultados
$rst_prop = mysqli_query($cnn, $vsql0);

if (!$rst_prop->num_rows) {
    header('Location: ' . '../admin/index.php');
}


$recno_prop = mysqli_fetch_assoc($rst_prop);

?>

<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $recno_prop['ftitulo']; ?></h1>

    <img loading="lazy" src="new_imagenes/<?php echo $recno_prop['fnombre_imagen']; ?>" alt="imagen de la propiedad">


    <div class="resumen-propiedad">
        <h3><?php echo $recno_prop['fcod_propiedades'] . "  " . $recno_prop['ftitulo']; ?></h3>
        <p class="precio">Precio $ <?php echo $recno_prop['fprecio']; ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $recno_prop['fwc']; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p><?php echo $recno_prop['festacionamiento']; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p><?php echo $recno_prop['fhabitaciones']; ?></p>
            </li>
        </ul>

        <p><?php echo $recno_prop['fdescripcion']; ?></p>

    </div>
</main>

<?php
mysqli_close($cnn);
incluir_nfrm(legen_footer("anuncio.php (en raiz)"));
incluirTemplate('footer', $miruta);
?>