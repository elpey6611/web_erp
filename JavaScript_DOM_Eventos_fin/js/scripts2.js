//eventos
//espera que todo se descargue js, y los archivos que depende del html esten listo
window.addEventListener('load', function () {
    console.log(2);
}
)


window.onload =function () {
    console.log(2);
}



//solo espera por el html, pero no espera ccs o imagenes
document.addEventListener('DOMContentloaded', function()
{
     console.log(4);
}
)