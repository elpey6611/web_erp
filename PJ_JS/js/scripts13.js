//objetos
"use strict";  //correr javascripts en modo estricto
const producto={nombreProducto: "monitor de 20 pulgadas", precio:300, disponible:true}

const medidas ={
    peso: '1kg',
    medida: '1m'
}

const nuevo_producto = {...producto, ...medidas};

console.log(producto);


console.log(nuevo_producto);
