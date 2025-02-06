//for loop
for(let i=0; i<=10; i++)
{
   console.log(i);
}



for(let i=0; i<=100; i++)
{
  if (i % 2 ===0)
  {
     console.log(`El valor es par ${i}`); 
  }
  else
  {
    console.log(`El valor es impar ${i}`); 
  }
}


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


for(let j=0; j<carrito.length; j++)
{
  console.log(`Nombre Producto : ${carrito[j].nombre}`); 
  console.log(`precio :  ${carrito[j].precio}`);
}