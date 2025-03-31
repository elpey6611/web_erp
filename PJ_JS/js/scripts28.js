//classes
class Producto
{
    constructor(nombre, precio)
    {
      this.nombre=nombre;
      this.precio = precio;
    }

    formatearProducto()
    {
        return `El Producto ${this.nombre}  Tiene un precio de :  ${this.precio} este es un ejemplo de prototype`;
    }

    retorna_precio(vprecio)
    {
        return this.vprecio;
    }
}

const producto2 = new Producto('Monitor Curvo de 49"', 800);
const producto3 = new Producto('Laptop"', 300);

console.log(producto2);
console.log(producto3);


const vprecio = new Producto('Nuevo Producto',1500);

console.log(vprecio.precio);