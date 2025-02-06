//arrow function


const sumar2 = (vn1, vn2) => {
  console.log(vn1 * vn2);
}


sumar2(40, 60);


const aprendiendo = (tecnologia) => {
  console.log(`Aprendiendo Tecnologia : ${tecnologia}`)
}

aprendiendo('JavaScript');

//arrow metodos 

const vmeses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];

//ejemplo de mantener los mismos datos osea no perder los originales

const CARRITO = [{ nombre: 'MONITOR 20 PULGADAS', precio: 500 },
{ nombre: 'TELEVISION', precio: 700 },
{ nombre: 'TABLET', precio: 300 },
{ nombre: 'AUDIFONOS', precio: 200 },
{ nombre: 'TECLADO', precio: 50 },
{ nombre: 'CELULAR', precio: 500 },
{ nombre: 'BOCINAS', precio: 300 },
{ nombre: 'LAPTOP', precio: 800 }];


//foreach
vmeses.forEach(mes => {
  console.log(mes);
  if (mes == 'Marzo') {
    console.log('Marzo si Existe');
  }
})

let resultado, resultado1, resultado2, resultado3, resultado4;

resultado = CARRITO.some(producto => {
  return producto.nombre === 'Celular';
}
)

console.log(resultado);
//some
resultado1 = CARRITO.some(producto => {
  return producto.nombre === 'Celular';
}
)

console.log(resultado1);
//reduce
resultado2 = CARRITO.reduce((total, producto) => {
  return total + producto.precio;
}, 0
);

console.log(resultado2);


//filter
resultado3 = CARRITO.filter(producto => {
  return producto.precio>400;
}
);

console.log(resultado3);

resultado4 = CARRITO.filter(producto => {
  return producto.nombre !=='Celular';
}
);

console.log(resultado4);




