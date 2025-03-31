//orden de las operaciones
var vresultado0 = 20 + 30 * 2;

var vresultado1 = (20 + 30 ) * 2;

var vresultado2 = (100 + 200 + 300 ) * .2;

var vresultado3 = ((100 + 200 + 300 ) * .2) * 1.16;

var vcontador =1;

console.log("suma segun el orden primero multiplicacion y luego la suma");
console.log(vresultado0);

console.log("suma segun el orden primero la suma y luego la multiplicacion");
console.log(vresultado1);

console.log("este es un ejemplo se calcula la suma segun el orden primero la suma y el resultado de la suma se calcula la multiplicacion del .2");
console.log(vresultado2);

console.log("se calcula el .2 y luego calculamos el iva");
console.log(vresultado3);

vcontador++;
console.log("se calcula el incremento del contador");
console.log(vcontador);