//poo

//object literal
const producto =
{
    nombre: 'table',
    precio: 500
}


//object constructor

function Producto(nombre, precio)
{
   this.nombre=nombre;
   this.precio = precio;
}

const producto2 = new Producto('Monitor curvo de 40"', 800);

const producto3 = new Producto('Laptop"', 1800);

console.log(producto2);

console.log(producto3);