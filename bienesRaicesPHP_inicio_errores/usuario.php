<?php
require 'includes/funciones.php';
//importar la conexion
require 'includes/config/dbconexion.php';
require 'includes/config/ado_db.php';
$cnn = conectardb();
$r_inicio = 'Location: ' . 'index.php';
//crear un email y pass
$email = "correo@correo.com";
$vpassword = "123456";
//obtenemos el maximo de los usuarios
$vsql0 = "";
$vsql0 = "select MAX(fcod_usuario) AS mcorr";
$vsql0 .= " FROM tb_usuarios";
$vsql0 .= " WHERE not fcod_usuario is null";
$vsql0 .= " having (not MAX(fcod_usuario) is null);";
$vcod_usu = maximo_corr($vsql0, $cnn);
$vcod_usu = str_pad($vcod_usu, 5, "0", STR_PAD_LEFT);
//echo $vcod_usu;

$passwordHash = password_hash($vpassword, PASSWORD_DEFAULT);

//sql consulta (insert)
$vsql0 = "";
$vsql0 = "insert into tb_usuarios (";
$vsql0 .= " fcod_usuario,";
$vsql0 .= " fnombre_usuario,";
$vsql0 .= " fapellido_usuario,";
$vsql0 .= " femail,";
$vsql0 .= " fclave_acceso)";
$vsql0 .= " values ('";
$vsql0 .= $vcod_usu . "','";
$vsql0 .= 'Administrador' . "','";
$vsql0 .= 'Administrador' . "','";
$vsql0 .= $email . "','";
$vsql0 .= $passwordHash . "')";
$vrecno = fnl_aud($vsql0, $cnn);
if ($vrecno) {
    header($r_inicio);
}
//agregarlo a la base de datos

mysqli_close($cnn);
