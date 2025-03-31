<?php
require 'app.php';

function incluirTemplate($nombre, $laruta, $inicio = false)
{
    //var_dump(PROJECT_ROOT_PBASE)  . 
    //include "plantillas/${nombre}.php";
    include $laruta . "/${nombre}.php";
}

function estaAutenticado(): bool
{
    session_start();

    $auth = $_SESSION['login'];
    if ($auth) {
        return true;
    }
    return false;
}

function incluir_nfrm($nfrm)
{
    define('INCLU_NFRM', $nfrm);
}



function get_file_dir()
{

    $dir = dirname(getcwd());
    //str_replace(busqueda, reemplazo, cadena, conteo)
    $dir1 = str_replace('\\', '/', $dir);
    //$curDir = getcwd();
    //chdir($dir);
    //$dir = getcwd();
    //chdir($curDir);
    return $dir1;
}
