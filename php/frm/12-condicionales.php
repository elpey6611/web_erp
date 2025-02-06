<?php
include '../includes/header.php';

$autenticado = true;
$admin = false;
if ($autenticado && $admin) {
    echo "usuario autenticado correctamente";
} else {
    echo "usuario no autenticado iniciar de nuevo";
}



//if anidado

$cliente = [
    'nombre' => 'alberto bolaños',
    'saldo' => 4000,
    'informacion' => [
        'tipo' => "premium"
    ]
];

echo "<br/>";

if (!empty($cliente)) {
    echo "el arreglo de alciente no esta vacio";
    if ($cliente['saldo'] > 0) {
        echo "el saldo del cliente disponible";
    } else {
        echo "no hay saldo";
    }
}

echo "<br/>";

if ($cliente['saldo'] > 0) {
    echo "el cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'premium') {
    echo "el cliente es premium";
} else {
    echo "no hay cliente definido o no tienen saldo o no es premium";
}


echo "<br/>";

//switch
$tecnologia = 'PHP';
switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje !!!";
        break;

    default:
        echo "algun lenguaje que no se cual es";
        break;
}



include '../includes/footer.php';