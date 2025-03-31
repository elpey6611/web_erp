<?php
require '../incluir/funciones.php';
include '../plantillas/pub_var.php';
require '../config/ado_db.php';
require '../config/dbconexion.php';
$miruta = obtener_path();

incluirTemplate('header', $miruta);


//$auth = estaAutenticado();

// if ($auth) {
//     header('Location: /');
// }

$id = $_GET['id'];
if (!$id) {
    header('Location: ' . '../admin/index.php');
}


$vtitulo = "";
$vprecio = "";
$vimagen = "";
$vdescripcion = "";
$vhabitaciones = "";
$vwc = "";
$vestacionamientos = "";
$vvendedor = "";
$vcontinue = true;

$cnn = conectardb();
//propiedades
$vsql0 = "";
$vsql0 = "select * from tb_propiedades";
$vsql0 .= " where fcod_propiedades ='" .  $id . "'";
$resul_prop = mysqli_query($cnn, $vsql0);
$rst_prop = mysqli_fetch_assoc($resul_prop);

$vtitulo = $rst_prop['ftitulo'];
$vprecio = $rst_prop['fprecio'];
$vnom_original_imagen = "";
$vimagen_tabla = $rst_prop['fnombre_imagen'];
$name_archivo_origen = $rst_prop['fnombre_imagen'];
$vnom_original_imagen = $name_archivo_origen;
$vruta_imagen =  RUTA_NEW_IMG . "/" . $vimagen_tabla;
$vdescripcion = $rst_prop['fdescripcion'];
$vhabitaciones = $rst_prop['fhabitaciones'];
$vwc = $rst_prop['fwc'];
$vestacionamientos = $rst_prop['festacionamiento'];
$vvendedor = $rst_prop['tb_vendedores_fcod_vend'];

//vendedores
$vsql0 = "";
$vsql0 = "select * from tb_vendedores";
//$vsql0 .= " where fcod_vend ='" .  $vvendedor . "'";
$rst_vend = mysqli_query($cnn, $vsql0);
$verrores = [];



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //
    if (strlen($_FILES['txtfimagen']["tmp_name"]) > 0) {
        $archivo_origen = $_FILES['txtfimagen']["tmp_name"];
        //$vnom_imagen_update = $_FILES['txtfimagen']['tmp_name'];
        //$nombre_arch_imgupdate = $_FILES['txtfimagen']["name"];
        $vnom_original_imagen = $_FILES['txtfimagen']["name"];
        $new_img = $_FILES['txtfimagen']["tmp_name"];
        $nombre_destino = "";
        $parte = "." . substr($new_img, strrpos($new_img, '.') + 1);
        $nombre_destino =  str_pad($id, 6, "0", STR_PAD_LEFT) .  $parte;  //. substr($nombre_arch, strrpos($nombre_arch, '.') + 1);
    } else {
        $nombre_destino = $vimagen_tabla;
    }
    //asignando variables
    $vtitulo = mysqli_real_escape_string($cnn, $_POST['txtftitulo']);
    $vprecio = mysqli_real_escape_string($cnn, $_POST['txtfprecio']);
    $vdescripcion = mysqli_real_escape_string($cnn, $_POST['txtfdescripcion']);
    $vhabitaciones = mysqli_real_escape_string($cnn, $_POST['txtfhabitaciones']);
    $vwc = mysqli_real_escape_string($cnn, $_POST['txtfwc']);
    $vestacionamientos = mysqli_real_escape_string($cnn, $_POST['txtfestacionamientos']);
    $vvendedor = mysqli_real_escape_string($cnn, $_POST['txtfvendedor']);
    $vcreacion = date('Y-m-d');

    if (!$id) {
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

    if ($vcontinue) {
        $carpetaImagenes = RUTA_ROOT . 'new_imagenes/';
        $carpetaImagenes1 = RUTA_ROOT . 'new_imagenes/' . $vimagen_tabla;
        //eliminamos el archivo de la carpeta
        if (strlen($archivo_origen) > 0) {
            //borramos el archivo anterior
            if (file_exists($carpetaImagenes1)) {
                unlink($carpetaImagenes1);
            }
            if (!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }
            // //subir imagen
            $vnom_img = "";
            $vnom_img = $archivo_origen;
            // 
            $vnom_img1 = $vimagen;
            $vnom_img1 = $carpetaImagenes1;

            move_uploaded_file($vnom_img, $vnom_img1);
        } else {
            //$vnom_img1 = $nombre_destino;
        }
        //update
        $vsql = "";
        $vsql = "update tb_propiedades set";
        $vsql .= " ftitulo='" . $vtitulo . "',";
        $vsql .= " fprecio='" . $vprecio . "',";
        $vsql .= " fdescripcion='" . $vdescripcion . "',";
        $vsql .= " fhabitaciones=" . $vhabitaciones . ",";
        $vsql .= " fwc=" . $vwc . ",";
        $vsql .= " festacionamiento=" . $vestacionamientos . ",";
        $vsql .= " fruta_imagen='" . $carpetaImagenes1 . "',";
        $vsql .= " fnombre_imagen='" . $name_archivo_origen . "',";
        $vsql .= " fnom_original_imagen='" . $vnom_original_imagen . "',";
        $vsql .= " fcreacion='" . $vcreacion . "',";
        $vsql .= " tb_vendedores_fcod_vend='" . $vvendedor . "'";
        $vsql .= " where fcod_propiedades='" . $id . "'";
        $vrecno = fnl_aud($vsql, $cnn);
        if ($vrecno) {
            header('Location: ' . '../admin/index.php');
            header('Location: ' . '../admin/index.php');
        }
    }
}

?>


<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>

    <a href="<?php echo RUTA_ADMIN . 'index.php'; ?>" class="boton boton-verde">Volver</a>

    <?php foreach ($verrores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form class="formulario" method="POST" enctype="multipart/form-data">
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

            <img src="<?php echo $vruta_imagen ?>" class="imagen-samll">

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
                <?php while ($rowv = mysqli_fetch_array($rst_vend)): ?>
                    <option <?php echo $vvendedor === $rowv['fcod_vend'] ? 'selected' : ''; ?>
                        value="<?php echo $rowv['fcod_vend']; ?>">
                        <?php echo $rowv['fnombre_vend'] . " " . $rowv['fapellido_vend']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>
        <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
    </form>

</main>




<?php
incluir_nfrm(legen_footer("actualizar.php en la carpeta (frm)"));
incluirTemplate('footer', $miruta);
?>