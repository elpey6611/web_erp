//objetos
"use strict";  //correr javascripts en modo estricto
const producto={nombreProducto: "monitor de 20 pulgadas", precio:300, disponible:true}

//para congelar el objeto y no se puede agregar ni borrar y ni cambiar valores
Object.freeze(producto);

//si permite cambiar o modificar valores mas no borrar ni agregar propiedades
Object.seal(producto);


producto.imagen = 'imagen.jpg';

console.log(producto);

