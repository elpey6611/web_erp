//objetos

const vmeses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];

//ejemplo de mantener los mismos datos osea no perder los originales

const CARRITO = [{nombre:'MONITOR 20 PULGADAS', precio:500},
                {nombre:'TELEVISION', precio:700},
                {nombre:'TABLET', precio:300},
                {nombre:'AUDIFONOS', precio:200},
                {nombre:'TECLADO', precio:50},
                {nombre:'CELULAR', precio:500},
                {nombre:'BOCINAS', precio:300},
                {nombre:'LAPTOP', precio:800}];


//foreach
vmeses.forEach(function(mes)
{
    console.log(mes);
    if(mes=='Marzo')
    {
        console.log('Marzo si Existe');
    }
})                

//array metodos

//uso de inclueds
//si existe regresa true
const vresultado = vmeses.includes('Marzo');
console.log(vresultado);

//no existe regresa false
const vresultado1 = vmeses.includes('Diciembre');
console.log(vresultado1);

//some para utilizar arreglos de objetos

let vresultado3 = CARRITO.some(function(producto)
{
return producto.nombre=='CELULAR';
}
)

console.log(vresultado3);


//sumar los valores de arreglo

let vresultado4 = CARRITO.reduce(function(vtotal, producto)
{
    return vtotal + producto.precio;
}, 0);

console.log(vresultado4);



//filter
let vresultado5 = CARRITO.filter(function(producto)
{
  return producto.precio>400;  
}
);

console.log(vresultado5);


let vresultado6 = CARRITO.filter(function(producto)
{
  return producto.nombre=='Celular';  
}
);

console.log(vresultado6);

let vresultado7 = CARRITO.filter(function(producto)
{
  return producto.nombre!=='Celular';  
}
);

console.log(vresultado7);