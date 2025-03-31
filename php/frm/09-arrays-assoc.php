<?php
include '../includes/header.php';

$cliente = [
    'nombre' => 'cleinte1',
    'saldo' => 400,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 450
    ]
];

echo "<pre>";
var_dump($cliente);
echo "<br/>";

echo $cliente['nombre'];

echo "<br/>";

echo $cliente['saldo'];

echo "<br/>";

echo $cliente['informacion']['tipo'];


echo "<br/>";

echo $cliente['informacion']['disponible'];


include '../includes/footer.php';