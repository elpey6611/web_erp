<?php include '../includes/header.php';

//sencilla
function sumar()
{
    echo 2 + 2;
}


function sumar1(int $numero1 =0 , int $numero2 = 0)
{

    echo $numero1 + $numero2;
}



sumar1(60, 80);

echo "<br/>0";

sumar1(80);

include '../includes/footer.php';