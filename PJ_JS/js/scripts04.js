//cadena de texto 
//para este caso que se necesita incluir las comillas dobles dentro del texto
//hay q incluir una \y con eso no da error
//o poner el texto entre comillas simples y poner las comillas dobles
const producto = "Monitor de 27\"";
const producto0 = 'Monitor de 35"';
const producto1 = String('Monitor de 35 pulgadas');
const producto2 = new String("monitor de 45 pulgadas");
const producto3 = "Aprediendo JavaScript con el curso de Desarrollo Web completo"

console.log(producto)
console.log(producto0)
//**no son muy comunes
//console.log(typeof producto1)

//console.log(producto2)

//typeof es para identificar el tipo de variable
//console.log(typeof producto2) 


//para obtener el total de caracteres que contiene una variable 
//utilizamos el siguiente comando
console.log(producto.length)

//para encontrar algun caracter dentro de un string
//utilizamos el siguiente comando
//retorna la posicion
console.log(producto3.indexOf('JavaScript'))


//retorna verdadero o falso
console.log(producto1.includes('35'))
