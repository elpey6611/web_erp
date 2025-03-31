<?php

require "includes/funciones.php";



// if (!isset($_SESSION)) {
//     session_start();
// }

// $auth = $_SESSION['login'] ?? false;
require 'includes\funciones.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_INICIO . '\build\css\app.css'; ?>">
</head>

<body>

    <header class="header <?php echo $inicio  ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img src="<?php echo '../build/img/logo.svg'; ?>" alt="Logotipo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="<?php echo '../build/img/barras.svg'; ?>" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="<?php echo '../build/img/dark-mode.svg'; ?>">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>

            </div> <!--.barra-->

            <?php echo $inicio ? "<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>" : ''; ?>
        </div>
    </header>