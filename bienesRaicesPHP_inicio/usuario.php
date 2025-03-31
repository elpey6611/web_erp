<?php
require 'incluir/funciones.php';

//importar conexion
require 'config/ado_db.php';
require 'config/dbconexion.php';

$cnn = conectardb();

//crear un email y pass
$email = "correo@correo.com";
$pass = "654321";

$passhash = password_hash($pass, PASSWORD_BCRYPT);

// obtenemos el maximo de los usuarios
$vsql0 = "";
$vsql0 = "select MAX(fcod_usuario) AS mcorr";
$vsql0 .= " FROM tb_usuarios";
$vsql0 .= " WHERE not fcod_usuario is null";
$vsql0 .= " having (not MAX(fcod_usuario) is null);";
$vcod_usuario = maximo_corr($vsql0, $cnn);

//agregar el usuario 
//insert
//query crear usuario
$vsql = "";
$vsql = "insert into tb_usuarios";
$vsql .= " (fcod_usuario,";
$vsql .= " fnombre_usuario,";
$vsql .= " fapellido_usuario,";
$vsql .= " femail,";
$vsql .= " fclave_acceso,";
$vsql .= " fperfil,";
$vsql .= " finicia_primera_vez)";
$vsql .= " values ('";
$vsql .=  str_pad($vcod_usuario, 5, "0", STR_PAD_LEFT) . "','";
$vsql .= "usuario1" . "','";
$vsql .= "usuario1" . "','";
$vsql .= $email . "','";
$vsql .= $passhash . "','";
$vsql .= "0" . "','";
$vsql .= "S" . "')";
$vrecno = fnl_aud($vsql, $cnn);
if ($vrecno) {
    unset($inicio);
    mysqli_close($cnn);
    header('Location: ' . RUTA_ADMIN . 'index.php');
}
mysqli_close($cnn);
