<?php 
include '../includes/header.php';

$carrito=['table', 'television', 'computadora'];

$carrito1= array('teclado', 'mouse', 'bocina');

echo "<br/>";

echo "<pre>";
var_dump($carrito);

echo "<br/>";

var_dump($carrito1);

echo "<br/>";

//añade un elemento nuevo
$carrito[3]="nuevo producto";

echo "<pre>";

var_dump($carrito);

echo "<pre>";

//añadir al final del arreglo
array_push($carrito, 'audifono');

echo "<pre>";

var_dump($carrito);


//añadir al inicio del arreglo
array_unshift($carrito, 'miniprinter');

echo "<pre>";

var_dump($carrito);



include '../includes/footer.php';