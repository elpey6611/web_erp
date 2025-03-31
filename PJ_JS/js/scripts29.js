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

//herencia
//este ejemplo hereda de productos y para llamar o mostrar
//la informacion de la clase de producto se utiliza super()
class Libro extends Producto
{
   constructor(nombre, precio, isbn)
   {
      super(nombre, precio);
      this.isbn = isbn;
   }

   formatearProducto()
   {
       return `${super.formatearProducto()}  y su ISBN ES ${this.isbn}`;
   }

   obtenerPrecio()
   {
    super.retorna_precio();
    console.log('Y si hay en existencia');
   }
}

const libro = new Libro('JavaScript la Revolucion', 120, '09080557488');
console.log(libro.formatearProducto());
console.log(libro.obtenerPrecio());
console.log(producto2.formatearProducto());

