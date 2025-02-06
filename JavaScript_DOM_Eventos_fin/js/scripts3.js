//eventos
//espera que todo se descargue js, y los archivos que depende del html esten listo
// window.addEventListener('load', function () {
//     console.log(2);
// }
// )


// window.onload = function () {
//     console.log(2);
// }



// //solo espera por el html, pero no espera ccs o imagenes
// document.addEventListener('DOMContentloaded', function () {
//     console.log(4);
// }
// )

// window.onscroll = function()
// {
//   console,log('scrolling....'); 
// }


//seleccionar elementos y asociarlos a un evento

// const vbtn_enviar = document.querySelector('.boton--primario');

// vbtn_enviar.addEventListener('click', function (evento) {
//     console.log(evento);
//     evento.preventDefault();

//     //validar formulario

//     console.log('enviando Formulario');
// }
// );

const datos = {
   nombre: '',
   email: '',
   mensaje: ''
}




//eventos de los input y text area

// Eventos de los Inputs...
const vnombre = document.querySelector('#nombre');
const vemail = document.querySelector('#email');
const vmensaje = document.querySelector('#mensaje');


vnombre.addEventListener('input', leerTexto);
vemail.addEventListener('input', leerTexto);
vmensaje.addEventListener('input', leerTexto);

function leerTexto(e) {
    // console.log(e);
    // console.log(e.target.value);

    datos[e.target.id] = e.target.value;

    console.log(datos);
}