<?php
try {
    $vhostname = "localhost";
    $vuser = "root";
    $vpass = "Tsoft2024.**";
    $vdbname = "db_erp_zp001";
    $vdbname1 = "db_enlaces_zp";
    $vport = 3399;

   $cn_erp = mysqli_connect($vhostname,$vuser,$vpass,$vdbname,$vport);
   $cn_enlaces = mysqli_connect($vhostname,$vuser,$vpass,$vdbname1,$vport);
   if(!$cn_erp && !$cb_enlaces)
   {
    echo "Error de Conexion";
    exit;
    die;
   }
} catch (\Throwable $th) {
    var_dump($th);
}
