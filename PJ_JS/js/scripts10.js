//objetos

const nombreProducto ="Monito 20 pulgadas";

const precio = 300;

const disponible = true

const producto={nombreProducto: "monitor de 20 pulgadas", precio:300, disponible:true}


console.log(producto);


//para acceder a el contenido o propiedades del objeto
console.log(producto.precio);


//para agregar nuevas propiedades
producto.imagen ='imagen.jpg';
console.log(producto.precio);

//para quitar propiedades
delete producto.precio;
console.log(producto.precio);

