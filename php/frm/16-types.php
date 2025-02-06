<?php include '../includes/header.php';

function usuarioAutenticado()
{
    return "el usuario esta autenticado";
}



$usuario0 = usuarioAutenticado();

echo "Usuario 0 " .  $usuario0;



//para cuando se ejecuta pero retorna un string boolan o lo que sea
function usuarioAutenticado1(bool $autenticado)  :string
{
    if ($autenticado) {
        return "<br/>" . " Usuario 1 esta autenticado";
    } else {
        return "<br/>" . "el Usuario 1  no autenticado";
    }
}


$usuario1 = usuarioAutenticado1(true);

echo $usuario1;

//cuando quieres que se ejecute pero que no regrese nada

function usuarioAutenticado2(bool $autenticado1)  :void
{
    if ($autenticado1) {
        echo "<br/>" . " Usuario 1 esta autenticado";
    } else {
        echo "<br/>" . "el Usuario 1  no autenticado";
    }
}


$usuario2 = usuarioAutenticado2(true);

echo $usuarioº2;


include '../includes/footer.php';
