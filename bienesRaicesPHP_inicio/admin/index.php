<?php
require '../incluir/funciones.php';
include '../plantillas/pub_var.php';
require '../config/ado_db.php';
require '../config/dbconexion.php';
//
$miruta = obtener_path();
$latura = RUTA_ROOT . "/new_imagenes/";
//
incluirTemplate('header', $miruta);
//conectando a base y sentencia sql
$cnn = conectardb();
//
$vsql9 = "";
$vsql9 = "SELECT fcod_propiedades,";
$vsql9 .= " ftitulo, ";
$vsql9 .= " fnombre_imagen,";
$vsql9 .= " fprecio";
$vsql9 .= " FROM tb_propiedades";
$vsql9 .= " order by fcod_propiedades";
//
$rst_prop = mysqli_query($cnn, $vsql9);
//


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nid = intval($_POST['txtid']);
    $vid = filter_var($nid, FILTER_VALIDATE_INT);
    if (!$nid) {
        exit;
    }
    $nid0 = $_POST['txtid'];
    //eliminamos la imagen del codigo en mencion
    $sql8 = "";
    $sql8 = "select fnombre_imagen from tb_propiedades";
    $sql8 .= " where fcod_propiedades='" . $nid0 . "'";
    $rst_imagen = mysqli_query($cnn, $sql8);
    $recno_img = mysqli_fetch_assoc($rst_imagen);
    if (file_exists('../new_imagenes/' . $recno_img['fnombre_imagen'])) {
        echo "esta es la imagen a eliminar" . $recno_img['fnombre_imagen'];
        unlink('../new_imagenes/' . $recno_img['fnombre_imagen']);
    }
    //eliminar la propiedad
    $vsql10 = "";
    $vsql10 = "delete from tb_propiedades";
    $vsql10 .= " where fcod_propiedades='" . $nid0 . "'";
    $resultado = mysqli_query($cnn, $vsql10);
    if ($resultado) {
        header('Location: ../admin/index.php');
    }
}
?>
<main class="contenedor seccion">
    <h1>Administrador de Bienes y Raices</h1>
    <a href="<?php echo RUTA_FRM . 'crear.php'; ?>" class="boton boton-verde">Nueva Propiedad</a>
    <table class="propiedades">
        <thead>
            <tr class="enc_tr">
                <th>Código</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($vrow_prop = mysqli_fetch_assoc($rst_prop)): ?>
                <tr class="det_tr">
                    <td class="tdcod-prod"><?php echo $vrow_prop['fcod_propiedades']; ?></td>
                    <td class="tdtitulo"><?php echo $vrow_prop['ftitulo']; ?></td>
                    <td>
                        <img src="<?php echo '../new_imagenes/' . trim($vrow_prop['fnombre_imagen']); ?>" class="imagen-tabla tdimg">
                    </td>
                    <td class="tdprecio">$ <?php echo $vrow_prop['fprecio']; ?></td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="txtid" value="<?php echo $vrow_prop['fcod_propiedades']; ?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="../frm/actualizar.php?id=<?php echo $vrow_prop['fcod_propiedades']; ?>" class="boton-azul-block">Actualizar</a>
                    </td>

                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php
//cerrar la conexion
mysqli_close($cnn);
incluir_nfrm(legen_footer("index.php en (carpeta admin)"));
incluirTemplate('footer', $miruta);
?>