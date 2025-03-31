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
$vsql9 = "select fcod_vend,";
$vsql9 .= " fnombre_vend,";
$vsql9 .= " fapellido_vend";
$vsql9 .= " from tb_vendedores";
$vsql9 .= " order by fcod_vend";

$recno_vend = mysqli_query($cnn, $vsql9);
$verrores = [];
$vcontinue = true;

$vcod_propiedades = "";
$vtitulo = "";
$vprecio = "";
$vimagen = "";
$vdescripcion = "";
$vhabitaciones = "";
$vwc = "";
$vestacionamientos = "";
$vvendedor = "";

//se ejecuta cuando es post
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vsql0 = "";
    $vsql0 = "select MAX(fcod_propiedades) AS mcorr";
    $vsql0 .= " FROM tb_propiedades";
    $vsql0 .= " WHERE not fcod_propiedades is null";
    $vsql0 .= " having (not MAX(fcod_propiedades) is null);";
    $vcod_propiedades = maximo_corr($vsql0, $cnn);
    //
    $vimagen0 = $_FILES['txtfimagen']["full_path"];
    $archivo_origen = $_FILES['txtfimagen']['tmp_name'];
    $nombre_arch = $_FILES['txtfimagen']["name"];
    $nombre_destino = "";
    $parte = "." . substr($nombre_arch, strrpos($nombre_arch, '.') + 1);
    $nombre_destino =  str_pad($vcod_propiedades, 6, "0", STR_PAD_LEFT) .  $parte;  //. substr($nombre_arch, strrpos($nombre_arch, '.') + 1);
    //asignando variables
    $vtitulo = mysqli_real_escape_string($cnn, $_POST['txtftitulo']);
    $vprecio = mysqli_real_escape_string($cnn, $_POST['txtfprecio']);
    $vdescripcion = mysqli_real_escape_string($cnn, $_POST['txtfdescripcion']);
    $vhabitaciones = mysqli_real_escape_string($cnn, $_POST['txtfhabitaciones']);
    $vwc = mysqli_real_escape_string($cnn, $_POST['txtfwc']);
    $vestacionamientos = mysqli_real_escape_string($cnn, $_POST['txtfestacionamientos']);
    $vvendedor = mysqli_real_escape_string($cnn, $_POST['txtfvendedor']);
    $vcreacion = date('Y-m-d');

    if (!$vcod_propiedades) {
        $verrores[] = "No se calculo el maximo de los registros de la tabla tb_propiedades";
        $vcontinue = false;
    }
    if (strlen($vtitulo) == 0) {
        $verrores[] = "El Titulo de la propiedad no puede estar en blanco o vacio";
        $vcontinue = false;
    }

    if ($vprecio == 0) {
        $verrores[] = "El precio de la propiedad no puede estar en blanco o cero";
        $vcontinue = false;
    }
    if (strlen($vdescripcion) == 0) {
        $verrores[] = "La descripción de la propiedad no puede estar en blanco o vacia";
        $vcontinue = false;
    }

    if (strlen($vhabitaciones) == 0) {
        $verrores[] = "El total de Habitaciones de la propiedad no puede estar en blanco o vacio o cero";
        $vcontinue = false;
    }

    if (strlen($vwc) == 0) {
        $verrores[] = "El total de baños de la propiedad no puede estar en blanco o vacio o cero";
        $vcontinue = false;
    }

    if (strlen($vestacionamientos) == 0) {
        $verrores[] = "El total de estacionamientos de la propiedad no puede estar en blanco o vacio o cero";
        $vcontinue = false;
    }

    if (strlen($vvendedor) == 0) {
        $verrores[] = "El vendedor de la propiedad no puede estar en blanco o vacio";
        $vcontinue = false;
    }

    if (strlen($vimagen)) {
        $verrores[] = "La Imagen de la propiedad no puede estar en blanco o vacio";
        $vcontinue = false;
    }

    if ($vcontinue) {
        //creamos la carpeta
        $carpetaImagenes = RUTA_ROOT . 'new_imagenes';
        $carpetaImagenes1 = RUTA_ROOT . 'new_imagenes/';
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes, 0777, true);
        }
        //subir imagen
        //ejemplos para generar numero aleatorios
        //$vnom = md5(uniqid(rand(),true)) . "jpg";
        $vnom_img = $carpetaImagenes . "//" . $nombre_destino;
        $vnom_img1 = $nombre_destino;

        move_uploaded_file($archivo_origen, $vnom_img);
        //insert
        $vsql = "";
        $vsql = "insert into tb_propiedades";
        $vsql .= " (fcod_propiedades,";
        $vsql .= " ftitulo,";
        $vsql .= " fprecio,";
        $vsql .= " fdescripcion,";
        $vsql .= " fhabitaciones,";
        $vsql .= " fwc,";
        $vsql .= " festacionamiento,";
        $vsql .= " fruta_imagen,";
        $vsql .= " fnombre_imagen,";
        $vsql .= " fnom_original_imagen,";
        $vsql .= " fcreacion,";
        $vsql .= " tb_vendedores_fcod_vend)";
        $vsql .= " values ('";
        $vsql .=  str_pad($vcod_propiedades, 6, "0", STR_PAD_LEFT) . "','";
        $vsql .= $vtitulo . "','";
        $vsql .= $vprecio . "','";
        $vsql .= $vdescripcion . "',";
        $vsql .= $vhabitaciones . ",";
        $vsql .= $vwc . ",";
        $vsql .= $vestacionamientos . ",'";
        $vsql .= $carpetaImagenes1 . "','";
        $vsql .= $vnom_img1 . "','";
        $vsql .= $vimagen0 . "','";
        $vsql .= $vcreacion . "','";
        $vsql .= str_pad($vvendedor, 4, "0", STR_PAD_LEFT) . "')";
        $vrecno = fnl_aud($vsql, $cnn);
        if ($vrecno) {
            unset($inicio);
            header('Location: ' . RUTA_ADMIN . 'index.php');
        }
    }
}

?>
<main class="contenedor seccion">
    <h1>Crear Propiedad</h1>

    <a href="<?php echo RUTA_INDEX; ?>" class="boton boton-verde">Volver</a>

    <?php foreach ($verrores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>

    <?php endforeach; ?>

    <form class="formulario" method="POST" action="<?php echo RUTA_FRM . 'crear.php' ?>" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>

            <label for="txtftitulo">Titulo</label>
            <input type="text" id="txtftitulo" value="<?php echo $vtitulo; ?>" name="txtftitulo"
                placeholder="Titulo de la Propiedad">

            <label for="txtfprecio">Precio</label>
            <input type="number" id="txtfprecio" value="<?php echo $vprecio; ?>" name="txtfprecio"
                placeholder="Precio Propiedad" min="1">

            <label for="txtfimagen">Imagen</label>
            <input type="file" id="txtfimagen" name="txtfimagen" accept="image/jpeg, image/png">

            <label for="txtfdescripcion">Descripción</label>
            <textarea id="txtfdescripcion" name="txtfdescripcion"
                placeholder="Descripción Propiedad"><?php echo $vdescripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Información de la Prpiedad</legend>

            <label for="txtfhabitaciones">habitaciones</label>
            <input type="number" id="txtfhabitaciones" value="<?php echo $vhabitaciones; ?>" name="txtfhabitaciones"
                placeholder="Ej: 3" min="1" max="9">

            <label for="txtfwc">Baños</label>
            <input type="number" id="txtfwc" value="<?php echo $vwc; ?>" name="txtfwc" placeholder="Ej: 3" min="1"
                max="9">

            <label for="txtfestacionamientos">Estacionamientos</label>
            <input type="number" id="txtfestacionamientos" value="<?php echo $vestacionamientos; ?>"
                name="txtfestacionamientos" placeholder="Ej: 3" min="1" max="9">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select value="<?php echo $vvendedor; ?>" name="txtfvendedor">
                <option value="">--Seleccione--</option>
                <?php while ($rowv = mysqli_fetch_array($recno_vend)): ?>
                    <option <?php echo $vvendedor === $rowv['fcod_vend'] ? 'selected' : ''; ?>
                        value="<?php echo $rowv['fcod_vend']; ?>">
                        <?php echo $rowv['fnombre_vend'] . " " . $rowv['fapellido_vend']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>
        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>

</main>

<?php
incluir_nfrm(legen_footer("crear.php (en carpeta frm)"));
incluirTemplate('footer', $miruta);
?>