<?php
$r_func = 'includes/funciones.php';
if (!file_exists($r_func)) {
    $r_func = 'includes/funciones.php';
    if (!file_exists($r_func)) {
        $r_func = 'includes/funciones.php';
        if (!file_exists($r_func)) {
            echo 'no existe archivo ' . $r_func;
        }
    }
}
require $r_func;
$auth = estaAutenticado();

if (!$auth) {
    header('Location: /');
}



$r_db = PROJECT_ROOT_DB . "dbconexion.php";
if (!file_exists($r_db)) {
    echo "no encontro la ruta de la base de datos";
    exit;
}

incluirTemplate('header');
incluirTemplate('pub_var');
//importar la conexion
require $r_db;
$cnn = conectardb();
$nombre_destino = '';
//obtenemos el nombre de la imagen
$vsql1 = "";
$vsql1 = "select fnombre_imagen from tb_propiedades";
$vsql1 .= " order by fcod_propiedades";
$rst_imagen = mysqli_query($cnn, $vsql1);
$resultado = mysqli_fetch_assoc($rst_imagen);
if ($resultado) {
    $nombre_destino = $resultado['fnombre_imagen'];
}
//sentencia sql
$vsql0 = "";
$vsql0 = "select * from tb_propiedades";
$vsql0 .= " order by fcod_propiedades";
$rst_prop = mysqli_query($cnn, $vsql0);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    if ($id) {
        //eliminar imagen
        if (strlen($nombre_destino) > 0) {
            $carpetaImagenes1 = '..\new_imagenes\\' . $nombre_destino;
            //eliminamos el archivo de la carpeta
            unlink($carpetaImagenes1);
        }
        //eliminar propiedad
        $vsql0 = "";
        $vsql0 = "delete from tb_propiedades";
        $vsql0 .= " where fcod_propiedades='" . $id . "'";
        $vresultado = mysqli_query($cnn, $vsql0);
        if ($vresultado) {
            header('localtion:' . 'admin\\index.php');
            header('localtion:' . 'admin\\index.php');
        }
    }
}

$ruta_actualizar = PROJECT_ROOT_INICIO . 'actualizar.php';
$r_crear = PROJECT_ROOT_INICIO . 'crear.php';
?>


<main class="contenedor seccion">
    <h1>Administrador Bienes Raices</h1>
    <a href="<?php echo $r_crear ?>" class="boton boton-verde">
        Nueva Propiedad
    </a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>IMAGEN</th>
                <th>PRECIO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <!--mostrar los resultados de la consulta-->
        <tbody>
            <?php while ($vrow_prop = mysqli_fetch_assoc($rst_prop)): ?>
                <tr>
                    <td><?php echo $vrow_prop['fcod_propiedades']; ?></td>
                    <td><?php echo $vrow_prop['ftitulo']; ?></td>
                    <td>
                        <img src="<?php echo '..\new_imagenes\\' . trim($vrow_prop['fnombre_imagen']); ?>" class="imagen-tabla">
                    </td>
                    <td>$ <?php echo $vrow_prop['fprecio']; ?></td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $vrow_prop['fcod_propiedades']; ?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="admin\propiedades\actualizar.php?id=<?php echo $vrow_prop['fcod_propiedades']; ?>" class="boton-azul-block">Actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php
//cerrar la conexion
mysqli_close($cnn);
incluir_nfrm(legen_footer("index.php" . " (de \admin)"));
incluirTemplate('footer', FUNCIONES_URL);
?>