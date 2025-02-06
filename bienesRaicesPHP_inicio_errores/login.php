<?php

$auth = "";
// $r_app = dirname(__FILE__) . '\\' . 'includes\app.php';
// require $r_app; //'\includes\app.php';;

$r_func = 'includes\funciones.php';  //FUNCIONES_URL;
require $r_func; //'/includes/funciones.php';

$r_db = '/includes/config/';

require $r_db . 'ado_db.php'; //'includes/config/ado_db.php';
require $r_db . 'dbconexion.php'; //'includes/config/dbconexion.php';


$cnn = conectardb();
$r_inicio = 'Location: ' . 'login.php';
$r_index = "admin/index.php";
$vcontinue = true;
$errores = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = mysqli_real_escape_string($cnn, filter_var($_POST['txtfemail'], FILTER_VALIDATE_EMAIL));
    $vpass = mysqli_real_escape_string($cnn, $_POST['txtfclave']);
    if (!$email) {
        $errores[] = "El email es obligatorio o no es valido";
        $vcontinue = false;
    }
    if (!$vpass) {
        $errores[] = "El password es obligatorio o no es valido";
        $vcontinue = false;
    }

    if (empty($errores)) {
        //revisar si existe el usuario
        $vsql0 = "";
        $vsql0 = "select * from tb_usuarios";
        $vsql0 .= " where femail='" . $email . "'";
        //$vsql0 .= " and fclave_acceso='" . $vpass . "'";
        $recno_usu = sql_array($vsql0, $cnn);
        if ($recno_usu->num_rows) {
            $usuario = mysqli_fetch_assoc(($recno_usu));
            $auth = password_verify($vpass, $usuario['fclave_acceso']);
            if ($auth > 0) {
                //usuario autenticado
                session_start();
                $_SESSION['usuario'] = $usuario['femail'];
                $_SESSION['login'] = true;
                //se va a admin index solo para hacer pruebas
                //header("Location: . 'admin/index.php'");
                //die();
            } else {
                $errores[] = "Clave o PassWord Incorrecta";
            }
        } else {
            $errores[] = "El Usuario No existe";
        }
    } else {
        echo 'aun que fue post no entro';
    }
} else {
    $vcontinue = true;
}

$r_header = 'header';
$r_pubvar = 'pub_var';
incluirTemplate($r_header);
incluirTemplate($r_pubvar);
?>


<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>

    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach ?>



    <form method="POST" class="formulario" validete>
        <fieldset>
            <legend>Email y Password</legend>

            <label for="txtfemail">Nombre</label>
            <input type="email" name="txtfemail" placeholder="Tu Email" id="txtfemail" required></input>

            <label for="txtfclave">Password</label>
            <input type="password" name="txtfclave" placeholder="Tu Password" id="txtfclave" required></input>
        </fieldset>
        <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
    </form>

</main>

<?php
incluir_nfrm(legen_footer("login.php"));
incluirTemplate('footer', TEMPLATES_URL);
//mysqli_close($cnn);
?>