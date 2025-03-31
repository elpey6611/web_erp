<?php
require "includes\app.php";

function incluirTemplate(string  $nombre, bool $inicio = false)
{
     //var_dump(PROJECT_ROOT_PBASE)  . 

    include  "\pbase" . "\{$nombre}.php";
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
