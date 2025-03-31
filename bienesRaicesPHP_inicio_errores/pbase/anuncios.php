<?php

//conexion base

require 'config/dbconexion.php';  // '..\..\includes\config\dbconexion.php';
require 'config/ado_db.php';
$cnn = conectardb();

//consultar 
$vsql9 = "";
$vsql9 = "select *";
$vsql9 .= " from tb_propiedades limit ${limite_imagen}";
//obtener resultados
$recno_anuncios = mysqli_query($cnn, $vsql9);

?>


<div class="contenedor-anuncios">
    <?php while ($vrow_anun = mysqli_fetch_assoc($recno_anuncios)): ?>
        <div class="anuncio">
            <picture>
                <img loading="lazy" src="new_imagenes/<?php echo $vrow_anun['fnombre_imagen']; ?>" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3><?php echo $vrow_anun['ftitulo']; ?></h3>
                <p><?php echo $vrow_anun['fdescripcion']; ?></p>
                <p class="precio">$ <?php echo $vrow_anun['fprecio']; ?></p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                        <p><?php echo $vrow_anun['fwc']; ?></p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                        <p><?php echo $vrow_anun['fhabitaciones']; ?></p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p><?php echo $vrow_anun['festacionamiento']; ?></p>
                    </li>
                </ul>
                <a href="anuncio.php?id=<?php echo $vrow_anun['fcod_propiedades']; ?>" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div><!--.contenido-anuncio-->
        </div><!--anuncio-->
    <?php endwhile; ?>
</div> <!--.contenedor-anuncios-->

<?php
//cerrar conexion base

?>