<?php
require 'incluir/funciones.php';
include 'plantillas/pub_var.php';
$miruta = obtener_path();
$inicio = true;
incluirTemplate('header', $miruta, $inicio);

?>
<main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="<?php echo RUTA_IMGICO . 'icono1.svg'; ?>" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati
                molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
        </div>
        <div class="icono">
            <img src="<?php echo RUTA_IMGICO . 'icono2.svg'; ?>" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati
                molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
        </div>
        <div class="icono">
            <img src="<?php echo RUTA_IMGICO . 'icono3.svg'; ?>" alt="Icono Tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati
                molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
        </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Casas y Depas en Venta</h2>

    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="<?php echo RUTA_IMGICO . 'anuncio1.webp'; ?>" type="image/webp">
                <source srcset="<? echo RUTA_IMGICO . 'anuncio1.jpg'; ?>" type="image/jpeg">
                <img loading="lazy" src="<? echo RUTA_IMGICO . 'anuncio1.jpg'; ?>" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3,0000,000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="<?php echo RUTA_IMGICO . 'icono_wc.svg'; ?>"
                            alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="<? echo RUTA_IMGICO . 'icono_estacionamiento.svg'; ?>"
                            alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="<?php echo RUTA_IMGICO . 'icono_dormitorio.svg'; ?>"
                            alt="icono habitaciones">
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!--.contenido-anuncio-->
        </div>
        <!--anuncio-->

        <div class="anuncio">
            <picture>
                <source srcset="<?php echo RUTA_IMGICO . 'anuncio2.webp'; ?>" type="image/webp">
                <source srcset="<?php echo RUTA_IMGICO . 'anuncio2.jpg'; ?>" type="image/jpeg">
                <img loading="lazy" src="<?php echo RUTA_IMGICO . 'anuncio2.jpg'; ?>" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa terminados de lujo</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3,0000,000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="<?php echo RUTA_IMGICO . 'icono_wc.svg'; ?>"
                            alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy"
                            src="'<?php echo RUTA_IMGICO . 'icono_estacionamiento.svg'; ?>" alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="<?php echo RUTA_IMGICO . 'icono_dormitorio.svg'; ?>"
                            alt="icono habitaciones">
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!--.contenido-anuncio-->
        </div>
        <!--anuncio-->

        <div class="anuncio">
            <picture>
                <source srcset="<?php echo RUTA_IMGICO . 'anuncio3.webp'; ?>" type="image/webp">
                <source srcset="<?php echo RUTA_IMGICO . 'anuncio3.jpg'; ?>" type="image/jpeg">
                <img loading="lazy" src="<?php echo RUTA_IMGICO . 'anuncio3.jpg'; ?>" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa con alberca</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3,0000,000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="<?php echo RUTA_IMGICO . 'icono_wc.svg'; ?>"
                            alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="<?php echo RUTA_IMGICO . 'icono_estacionamiento.svg'; ?>"
                            alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="<?php echo RUTA_IMGICO . 'icono_dormitorio.svg'; ?>"
                            alt="icono habitaciones">
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!--.contenido-anuncio-->
        </div>
        <!--anuncio-->

    </div>
    <!--.contenedor-anuncios-->

    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
    <a href="contacto.php" class="boton-amarillo">Contactános</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="<?php echo RUTA_IMGICO . 'blog1.webp'; ?>" type="image/webp">
                    <source srcset="<?php echo RUTA_IMGICO . 'blog1.jpg'; ?>" type="image/jpeg">
                    <img loading="lazy" src="<?php echo RUTA_IMGICO . 'blog1.jpg'; ?>" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span><?php echo date('dmY') ?></span> por:
                        <span>Admin</span>
                    </p>

                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                        ahorrando dinero
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="<?php echo RUTA_IMGICO . 'blog2.webp'; ?>" type="image/webp">
                    <source srcset="<?php echo RUTA_IMGICO . 'blog2.jpg'; ?>" type="image/jpeg">
                    <img loading="lazy" src="<?php echo RUTA_IMGICO . 'blog2.jpg'; ?>" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span><?php echo date('dmY') ?></span> por:
                        <span>Admin</span>
                    </p>

                    <p>
                        Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para
                        darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>

        <div class="testimonial">
            <blockquote>
                El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron
                cumple con todas mis expectativas.
            </blockquote>
            <p>- Tsoft Inc (RAMC/PRMG)</p>
        </div>
    </section>
</div>


<?php
//$vnfoo = 'footer';
//include "plantillas\\footer.php";
incluir_nfrm(legen_footer("index.php"));
incluirTemplate('footer', $miruta, $inicio);
?>