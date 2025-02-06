<?php
function fnl_aud($vsql, $base)
{
    $resultado = mysqli_query($base, $vsql);
    $vresul = $resultado;
    return $vresul;
}




function maximo_corr($vsql, $base)
{
    $vmcorr = 0;
    $result = mysqli_query($base, $vsql);
    $numero = mysqli_fetch_array($result);
    if ($numero == null) {
        $vmcorr = 1;
    } else {
        $vmcorr = $numero['mcorr'] + 1;
    }
    return $vmcorr;
}

function sql_array($vsql, $base)
{
    $resul0 = mysqli_query($base, $vsql);
    return $resul0;
}
