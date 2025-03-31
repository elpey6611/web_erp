//eventos
//submit

// const vbtn_enviar = document.querySelector('.boton--primario');

// vbtn_enviar.addEventListener('click', function (evento) {
//      console.log(evento);
//      evento.preventDefault();
//      //validar formulario
//      console.log('enviando Formulario');
//  }
//  );


//eventos de los input y text area
const datos = {
    nombre: '',
    email: '',
    mensaje: ''
}
// Eventos de los Inputs...
const formulario = document.querySelector('.formulario');
const nombre = document.querySelector('#nombre');
const email = document.querySelector('#email');
const mensaje = document.querySelector('#mensaje');



nombre.addEventListener('input', leerTexto);
email.addEventListener('input', leerTexto);
mensaje.addEventListener('input', leerTexto);

formulario.addEventListener('submit', function (e) {
    e.preventDefault();

    console.log(e);

    console.log('Di click y la página ya no recarga');

    console.log(datos);


    //validar formulario
    const { nombre, email, mensaje } = datos;

    if (nombre === '' || email === '' || mensaje === '') {
        mostrarAlertas('Todos Los Datos Son Necesario', 'error');
        //mostrarError('Todos Los Campos Son obligatorios');
        return;
    }
    mostrarAlertas('Todos Los Datos Son Correctos');

});

function leerTexto(e) {
    // console.log(e);
    // console.log(e.target.value);

    datos[e.target.id] = e.target.value;

    //console.log(datos);
}

function mostrarAlertas(mensaje, error = null) {
    const alerta = document.createElement('p');
    alerta.textContent = mensaje;
    if (error) {
        alerta.classList.add('error');
    }
    else {
        alerta.classList.add('correcto');
    }
    formulario.appendChild(alerta);
    setTimeout(() => {
        alerta.remove();
    }, 7000);    
}
