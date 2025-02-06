<?php
require 'includes\funciones.php';
$auth = estaAutenticado();

if ($auth) {
    header('Location: /');
}

$id = $_GET['id'];
if (!$id) {
    header('Location: ' . '\admin');
}

require LOCAL_PATH_ROOT . 'includes/config/ado_db.php';   // '..\..\includes\config\ado_db.php';
require LOCAL_PATH_ROOT . 'includes/config/dbconexion.php'; // '..\..\includes\config\dbconexion.php';

incluirTemplate('header');
incluirTemplate('pub_var');

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
$vimagen = $rst_prop['fnombre_imagen'];
$vruta_imagen =  'new_imagenes//' . $vimagen;
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




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //
    $vimagen0 = $_FILES['txtfimagen']["full_path"];
    if (strlen($vimagen0) > 0) {
        $archivo_origen = $_FILES['txtfimagen']['tmp_name'];
        $vnom_original_imagen = $_FILES['txtfimagen']['tmp_name'];
        $nombre_arch = $_FILES['txtfimagen']["name"];
        $nombre_destino = "";
        $parte = "." . substr($nombre_arch, strrpos($nombre_arch, '.') + 1);
        $nombre_destino =  str_pad($id, 6, "0", STR_PAD_LEFT) .  $parte;  //. substr($nombre_arch, strrpos($nombre_arch, '.') + 1);
    } else {
        $nombre_destino = $vimagen;
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
        $carpetaImagenes = 'new_imagenes';
        $carpetaImagenes1 = 'new_imagenes\\' . $nombre_destino;
        //eliminamos el archivo de la carpeta
        if (strlen($vimagen0) > 0) {
            //borramos el archivo anterior

            unlink($carpetaImagenes1);
            if (!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }
            // //subir imagen
            $vnom_img = "";
            $vnom_img1 = $vimagen;
            // //ejemplos para generar numero aleatorios
            $vnom_img = $carpetaImagenes . "//" . $nombre_destino;
            $vnom_img1 = $nombre_destino;
            //echo $vimagen0;
            //echo "     " . $archivo_origen;
            //echo "     " . $nombre_arch;
            //echo "ruta completa de archivo destino     " . $vnom_img;
            //exit;
            move_uploaded_file($archivo_origen, $vnom_img);
        } else {
            $vnom_img1 = $nombre_destino;
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
        $vsql .= " fnombre_imagen='" . $vnom_img1 . "',";
        $vsql .= " fnom_original_imagen='" . $vnom_original_imagen . "',";
        $vsql .= " fcreacion='" . $vcreacion . "',";
        $vsql .= " tb_vendedores_fcod_vend='" . $vvendedor . "'";
        $vsql .= " where fcod_propiedades='" . $id . "'";
        $vrecno = fnl_aud($vsql, $cnn);
        if ($vrecno) {
            header('Location: ' . '\admin');
        }
    }
}

?>


<main class="contenedor seccion">
    <h1>Actualizar</h1>

    <a href="<?php echo 'admin\index.php' ?> " class="boton boton-verde">
        Regresar
    </a>


    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>

            <label for="txtftitulo">Titulo</label>
            <input type="text" id="txtftitulo" value="<?php echo $vtitulo; ?>" name="txtftitulo" placeholder="Titulo de la Propiedad">

            <label for="txtfprecio">Precio</label>
            <input type="number" id="txtfprecio" value="<?php echo $vprecio; ?>" name="txtfprecio" placeholder="Precio Propiedad" min="1">

            <label for="txtfimagen">Imagen</label>
            <input type="file" id="txtfimagen" name="txtfimagen" accept="image/jpeg, image/png">

            <img src="<?php echo $vruta_imagen ?>" class="imagen-samll">

            <label for="txtfdescripcion">Descripción</label>
            <textarea id="txtfdescripcion" name="txtfdescripcion" placeholder="Descripción Propiedad"><?php echo $vdescripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Información de la Prpiedad</legend>

            <label for="txtfhabitaciones">habitaciones</label>
            <input type="number" id="txtfhabitaciones" value="<?php echo $vhabitaciones; ?>" name="txtfhabitaciones" placeholder="Ej: 3" min="1" max="9">

            <label for="txtfwc">Baños</label>
            <input type="number" id="txtfwc" value="<?php echo $vwc; ?>" name="txtfwc" placeholder="Ej: 3" min="1" max="9">

            <label for="txtfestacionamientos">Estacionamientos</label>
            <input type="number" id="txtfestacionamientos" value="<?php echo $vestacionamientos; ?>" name="txtfestacionamientos" placeholder="Ej: 3" min="1" max="9">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select value="<?php echo $vvendedor; ?>" name="txtfvendedor">
                <option value="">--Seleccione--</option>
                <?php while ($rowv = mysqli_fetch_array($rst_vend)): ?>
                    <option <?php echo $vvendedor === $rowv['fcod_vend'] ? 'selected' : ''; ?> value="<?php echo $rowv['fcod_vend']; ?>"> <?php echo $rowv['fnombre_vend'] . " " . $rowv['fapellido_vend']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>
        <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
    </form>

</main>

<?php
incluir_nfrm(legen_footer("actualizar.php"));
incluirTemplate('footer');
?>