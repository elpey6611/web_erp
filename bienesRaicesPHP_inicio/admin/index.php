<?php
require '../incluir/funciones.php';
include '../plantillas/pub_var.php';
require '../config/ado_db.php';
require '../config/dbconexion.php';

$miruta = obtener_path();

incluirTemplate('header', $miruta);

//conectando a base y sentencia sql
$cnn = conectardb();

$vsql9 = "";
$vsql9 = "SELECT fcod_propiedades,";
$vsql9 .= " ftitulo, ";
$vsql9 .= " fnombre_imagen,";
$vsql9 .= " fprecio";
$vsql9 .= " FROM tb_propiedades";
$vsql9 .= " order by fcod_propiedades";

$rst_prop = mysqli_query($cnn, $vsql9);

?>
<main class="contenedor seccion">
    <h1>Administrador de Bienes y Raices</h1>
    <a href="<?php echo RUTA_FRM . 'crear.php'; ?>" class="boton boton-verde">Nueva Propiedad</a>
     <table class="propiedades">
        <thead>
            <tr>
                <th>Código</th>
                <th>Titulo</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</main>

<?php
incluir_nfrm(legen_footer("index.php en (carpeta admin)"));
incluirTemplate('footer', $miruta);
?>