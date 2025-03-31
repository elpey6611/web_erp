<?php 
include '../includes/header.php';

$nombrecliente="     cliente ricardo      ";

echo strlen($nombrecliente);

echo "<br/>";

echo var_dump($nombrecliente);

echo "<br/>";

$texto = trim($nombrecliente);
echo $texto;

echo "<br/>";

echo strlen($texto);


//convertirlo a mayusculas
echo "<br/>";

echo strtoupper($nombrecliente);


echo "<br/>";

echo strtolower($nombrecliente);


echo "<br/>";

$nombrecliente4 ="juan carlos aguilar";;
 
echo "<br/>";

echo $nombrecliente4;

echo "<br/>";

//buscar la posicion en una cadena
echo strpos($nombrecliente4, "aguilar");

echo "<br/>";

//para contatenar

echo "El cliente es " . $nombrecliente;

include '../includes/footer.php';