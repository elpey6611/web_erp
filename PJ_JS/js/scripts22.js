const puntaje =1000;

if(puntaje==1000)
{
  console.log('El puntaje si es 1000');
}
else
{
  console.log('El puntaje no  es 1000');
}

const puntaje1 ="1000";
//valida que sea igual a 1000 pero a demas sea igual al tipo
if(puntaje1===1000)
{
  console.log('El puntaje si es 1000');
}
else
{
  console.log('El puntaje no  es 1000');
}


const puntaje2 =1020;
//valida que no sea igual a 1000 o diferente
if(puntaje2 !== 1000)
{
  console.log('El puntaje es diferente a 1000');
}
else
{
  console.log('El puntaje si es igual 1000');
}



const efectivo =799;
const carrito = 800
//valida que no sea igual a 1000 o diferente
if(efectivo >  carrito)
{
  console.log('Si puede pagar');
}
else
{
  console.log('No puede pagar');
}


const rol ="EDITOR";

//valida que no sea igual a 1000 o diferente
if(rol=='ADMINISTRADOR')
{
  console.log('Si puede ENTRAR');
}
else if(rol=="EDITOR")
{
  console.log('Si puede ENTRAR ERES EDITOR');
}
else
{
  console.log('No puede pagar');
}