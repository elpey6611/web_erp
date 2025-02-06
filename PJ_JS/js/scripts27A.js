//poo

//object literal
const producto =
{
    nombre: 'table',
    precio: 500
}


//object constructor

function Cliente(nombre, apellido)
{
    this.nombre = nombre;
    this.apellido = apellido;
}

const cliente = Cliente('juan', 'de la torre');

function formatearCliente()
{
    return `El Producto ${this.nombre}  Tiene un precio de : $ ${this.apellido}`;
}

console.log(formatearCliente());

function Producto(nombre, precio)
{
   this.nombre=nombre;
   this.precio = precio;
}

const producto2 = new Producto('Monitor curvo de 40"', 800);

const producto3 = new Producto('Laptop"', 1800);



//**function formatearProducto(producto)
//{
    //return `El Producto ${producto.nombre}  Tiene un precio de : $ ${producto.precio}`;
//}
//

//prototype crea funciones que solo se utiliza en un objeto en especifico

Producto.prototype.formatearProducto = function()
{
    return `El Producto ${this.nombre}  Tiene un precio de :  ${this.precio} este es un ejemplo de prototype`;
}

console.log(producto2);

console.log(producto2.formatearProducto());

console.log(producto3.formatearProducto());

//console.log(formatearProducto(producto2));

//console.log(formatearProducto(producto3));



