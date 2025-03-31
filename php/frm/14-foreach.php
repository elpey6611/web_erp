<?php include '../includes/header.php';

//for each
$clientes = ["ricardo", "sandra", "llanira", "nancy", "tia roo"];

foreach ($clientes as $vrow) {
    echo $vrow . "<br/>";
}

echo  "<br/>";

for ($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i] . "<br/>";
}

$proveedores = [

    'nombre' => "reynoza",
    'valor' => 500,
    'tipo' => 'premium'

    // ,
    // [
    //     'nombre' => 'arturo',
    //     'valor' => 1000,
    //     'tipo' => 'medium'
    // ],
    // [
    //     'nombre' => 'castro',
    //     'valor' => 1500,
    //     'tipo' => 'medium'
    // ],
    // [
    //     'nombre' => 'fulvio',
    //     'valor' => 2000,
    //     'tipo' => 'bajo'
    // ],
    // [
    //     'nombre' => 'chepe palacios',
    //     'valor' => 2500,
    //     'tipo' => 'premium'
    // ]
];

echo  "<br/>";

foreach ($proveedores as $key => $valor) {
    echo $key . " - " . $valor . "<br/>";
}

$productos = [
    [
        'nombre' => 'tablet',
        'precio' => 200,
        'disponible' => false
    ],
    [
        'nombre' => 'television 27"',
        'precio' => 350,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor curvo 27"',
        'precio' => 800,
        'disponible' => true
    ]
];




foreach ($productos as $key => $vrowprod) { ?>
    <li>
        <p>
            Producto: <?php echo $vrowprod['nombre'] ?>;
            <br />
        </p>

        <br />
        <p>
            Precio <?php echo '$  ' . $vrowprod['precio'] ?>;
            <br />
        </p>

        <p>
            <?php echo ($vrowprod['disponible']) ? 'Disponible' : 'no Disponible'; ?>
        </p>

    </li>
<?php
    echo "<pre>";
    var_dump($vrowprod);
    echo "</pre>";
}

include '../includes/footer.php';
