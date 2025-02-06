function sumar(vnumero1, vnumero2)
{
   console.log(vnumero1 + vnumero2);    
}

sumar(200,265);
sumar(110,25);
sumar(60,40);
sumar(80,25);
sumar(100,35);

const multiplicar = function(vn1, vn2)
{
    console.log(vn1 * vn2);
}

multiplicar(200,265);
multiplicar(110,25);
multiplicar(60,40);
multiplicar(80,25);
multiplicar(100,35);


//este ejemplo es cuando no existe uno de los parametros y toma
//por defecto la asignacion 0 como se muestra vnumero1=0

function sumar1(vnumero1=0, vnumero2=0)
{
    console.log(vnumero1 + vnumero2)
}

sumar1(200);
sumar1(110,25);
sumar1(60,40);
sumar1(80,25);
sumar1(100,35);