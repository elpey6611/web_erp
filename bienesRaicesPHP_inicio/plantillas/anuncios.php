<?php
if (!$id) {
    header('Location: ' . '../admin/index.php');
}

//importar base
require 'config/ado_db.php'; //'/../config/ado_db.php';
require 'config/dbconexion.php'; //'../config/dbconexion.php';
$cnn = conectardb();
//consulta query
$vsql0 = "";
$vsql0 = "select * from tb_propiedades LIMIT ${limite}";
//$vsql0 .= " where fcod_propiedades ='" .  $id . "'";
//obtener resultados
$rst_prop = mysqli_query($cnn, $vsql0);
?>

<div class="contenedor-anuncios">
    <?php while ($recno_prop = mysqli_fetch_assoc($rst_prop)): ?>
        <div class="anuncio">
            <img loading="lazy" src="new_imagenes/<?php echo $recno_prop['fnombre_imagen']; ?>" alt="anuncio">
            <div class="contenido-anuncio">
                <h3><?php echo $recno_prop['fcod_propiedades'] . "  " . $recno_prop['ftitulo']; ?></h3>
                <p><?php echo $recno_prop['fdescripcion']; ?></p>
                <p class="precio">$<?php echo $recno_prop['fprecio']; ?></p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                        <p><?php echo $recno_prop['fwc']; ?></p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg"
                            alt="icono estacionamiento">
                        <p><?php echo $recno_prop['festacionamiento']; ?></p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                        <p><?php echo $recno_prop['fhabitaciones']; ?></p>
                    </li>
                </ul>
                <a href="anuncio.php?id=<?php echo $recno_prop['fcod_propiedades']; ?>" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php
//cerrar conexion
mysqli_close($cnn);
?>