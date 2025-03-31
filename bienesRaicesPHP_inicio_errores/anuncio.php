<?php
$id = $_GET['id'];
if (!$id) {
    header('Location: ' . PROJECT_ROOT . '\admin');
}
require 'includes\funciones.php';
require 'includes\config\ado_db.php';
require 'includes\config\dbconexion.php';


incluirTemplate('header');
incluirTemplate('pub_var');

$cnn = conectardb();
//propiedades
$vsql0 = "";
$vsql0 = "select * from tb_propiedades";
$vsql0 .= " where fcod_propiedades ='" .  $id . "'";
$resul_prop = mysqli_query($cnn, $vsql0);
if ($resul_prop->num_rows == 0) {
    header('Location: ' . PROJECT_ROOT . '\admin');
}
$rst_prop = mysqli_fetch_assoc($resul_prop);
$vimagen = $rst_prop['fnombre_imagen'];
$vruta_imagen = 'new_imagenes//' . $vimagen;
?>


<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $rst_prop['ftitulo']; ?></h1>
    <img loading="lazy" src="<?php echo $vruta_imagen; ?>" alt="imagen de la propiedad">

    <div class="resumen-propiedad">
        <p><?php echo $rst_prop['fdescripcion']; ?></p>
        <p>Precio</p>
        <p class="precio">$ <?php echo $rst_prop['fprecio']; ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $rst_prop['fwc']; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p><?php echo $rst_prop['fhabitaciones']; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p><?php echo $rst_prop['festacionamiento']; ?></p>
            </li>
        </ul>

    </div>
</main>

<?php
mysqli_close($cnn);
incluir_nfrm(legen_footer("anuncio.php"));
incluirTemplate('footer');
?>