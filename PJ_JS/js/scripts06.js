//objeto math

var vrandom = Math.random();

var vpi = Math.PI;

var vround = Math.round(Math.PI);

var vfloor = Math.floor(3.53);

var vsqlrt = Math.sqrt(144);

var vabs = Math.abs(-300);

var vmin = Math.min(3,5,1,8,2,10);

var vmax = Math.max(3,5,1,8,2,10);

console.log("random");
console.log(vrandom);

console.log("pi");
console.log(vpi);

console.log("round");
console.log(vround);

console.log("floor"); //redondea asi abajo
console.log(vfloor);

console.log("ceil"); //redondea asia riba
console.log(Math.ceil(2.46));

console.log("raiz cuadrada"); //raiz cuadrada
console.log(vsqlrt);

console.log("Valor Absoluto"); //valor absoluto
console.log(vsqlrt);

console.log("Valor Minimo"); //Obtiene el valor minimo
console.log(vmin);

console.log("Valor Maximo"); //Obtiene el valor maximo
console.log(vmax);

console.log("random pero arriba de 0"); //Obtiene el valor maximo
console.log(Math.floor(vrandom * 30));