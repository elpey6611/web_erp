let total =0;

function agregarcarrito(precio)
{
return total += precio;
}

function calcularimpuestos(total)
{
    return 1.16 * total;
}

total = agregarcarrito(200);

total = agregarcarrito(400);
total = agregarcarrito(500);
total = agregarcarrito(1200);


console.log(total);

const totalApagar = calcularimpuestos(total);

const tiva = totalApagar - total;



console.log(`Total $${total}`);

console.log(`Total Impuesto $${tiva}`);

console.log(`Total a pagar con Impuestos $${totalApagar}`);