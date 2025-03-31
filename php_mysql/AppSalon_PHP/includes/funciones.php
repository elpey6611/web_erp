<?php

function obtener_servicio()
{
    try {
        //importar las credenciales
        require 'database.php';
        //require 'cerrardb.php';
        //consulta sql
        $vsql = "";
        $vsql = "select codemp, codusu, nomusu from tb_usuarios";
        $vsql = $vsql . " WHERE CODEMP='001'";
        $vsql = $vsql . " AND CODUSU='001'";


        //realizar la consulta a la base de enlaces
        $vrst = mysqli_query($cn_enlaces, $vsql);

        //acceder a los resultador
        return $vrst;
        //cerrar la conexion
        //cerrardb($cn_enlaces);
    } catch (\Throwable $th) {
        var_dump($th);
    }
}


obtener_servicio();
