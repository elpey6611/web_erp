//foreach
// se utiliza en arreglos
const carrito = [
  {nombre: 'Monito de 20 pulgadas', precio: 500},
  {nombre: 'Television de 50 pulgadas', precio: 700},
  {nombre: 'Tablet', precio: 300},
  {nombre: 'Audifonos', precio: 200},
  {nombre: 'Teclado', precio: 50},
  {nombre: 'Celular', precio: 500},
  {nombre: 'Bocinas', precio: 300},
  {nombre: 'Laptop', precio: 800}
];

carrito.forEach(function(producto)
{
  console.log(`Nombre Producto : ${producto.nombre}`, `Precio Producto : ${producto.precio}`)
  //console.log(producto.precio)  
}
);




//map
//crea un nuevo arreglo  de

carrito.map(function(producto)
{
  console.log(`Nombre Producto : ${producto.nombre}`, `Precio Producto : ${producto.precio}`)
  //console.log(producto.precio)  
}
);