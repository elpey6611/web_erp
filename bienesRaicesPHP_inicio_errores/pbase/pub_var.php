<?php
function incl_il()
{
    $path_il = __DIR__ . '/build/img/';
    return $path_il;
}

function incl_css()
{
    $path_css = '/build/css/';
    return $path_css;
}

function legen_footer($nfrm)
{
    global $vnfrm;
    $vnfrm = "(RAMC / PRMG)  " . $nfrm;
    return $vnfrm;
}
