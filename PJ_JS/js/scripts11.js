//objetos

const producto={nombreProducto: "monitor de 20 pulgadas", precio:300, disponible:true}


console.log(producto);


const precioProducto = producto.precio;
const nombreProducto=producto.nombreProducto;


console.log(precioProducto);
console.log(nombreProducto);


//destructuring

const {precio, nombreProducto1} = producto;

console.log(precio);