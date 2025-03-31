<?php
function conectardb(): mysqli
{
    $db = mysqli_connect('localhost', 'root', 'Tsoft2024.**', 'db_bienesraices_crud', '3399');
    if (!$db) {
        echo 'Error de Conexion';
        exit;
    }
    return $db;
}
