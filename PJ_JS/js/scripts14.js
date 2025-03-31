//objetos
"use strict";  //correr javascripts en modo estricto
const vmeses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];

//ejemplo de mantener los mismos datos osea no perder los originales

const vnewmeses = [...vmeses];

vnewmeses[7] = 'Julio';

vnewmeses.push(8) ='Agosto'; //agrega al final del arreglo

vnewmeses.unshift[-1] = 'Septiembre';
vmeses.unshift[-2] = 'Octubre';
vnewmeses.unshift[-3] = 'Noviembre';  //agregar al inicio del arreglo

console.table(vnewmeses);


const vnewmeses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];
vnewmeses.pop(); //elimina el ultimo elemento del arreglo

console.table(vnewmeses);


const vnewmeses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];
vnewmeses.shift(); //elimina el primer elemento del arreglo

console.table(vmeses);


const vnewmeses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];
vnewmeses.splice(2,1); //elimina un elemento espesifico

console.table(vnewmeses); //arreglo modificado
console.table(vmeses); //arreglo original


