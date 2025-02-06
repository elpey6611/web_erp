<?php 
include '../includes/header.php';

//buscar elementos en un arreglo

$carrito = ['tablet','monitor','audifonos'];

var_dump(in_array('carrito', $carrito));

//ordenar elementos 

$numero = array(1,3,4,5,7,8,2,6);

sort($numero); //meno a mayor

rsort($numero); //mayor a menor

echo "<pre>";

var_dump($numero);

echo "</pre>";

include '../includes/footer.php';