<?php
include '../includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('pedro', 'juan', 'karen');

$cliente = [
    'nombre' => 'nombre',
    'saldo' => 10500
];

//empty
var_dump(empty($clientes));

var_dump(empty($clientes2));

var_dump(empty($clientes3));

//isset revisa si un arreglo esta creado o propiedad esta definida

var_dump($clientes);

var_dump($clientes2);

var_dump($clientes3);

var_dump($clientes4);

//valida si existe una propiedad
var_dump(isset($cliente['nombre']));

var_dump(isset($cliente['codigo']));

include '../includes/footer.php';