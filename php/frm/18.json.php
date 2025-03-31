<?php include '../includes/header.php';


$productos = [
    [
        'nombre' => 'tablet',
        'precio' => 200,
        'disponible' => false
    ],
    [
        'nombre' => 'televisión 27"',
        'precio' => 350,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor curvo 27"',
        'precio' => 800,
        'disponible' => true
    ]
];

echo "<pre>";
var_dump($productos);
echo "</pre>";


$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

var_dump($json);

$json_array = json_decode($json);

echo "<br/>";

var_dump($json_array);

include '../includes/footer.php';
