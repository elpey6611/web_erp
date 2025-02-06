//Promise


const usuarioAutenticado = new Promise((resolve, reject) => {
    const auth = true;
    if (auth) {
        resolve('Usuario Autenticado');
    }
    else {
        reject('No se pudo iniciar sesion');
    }
}
);


console.log(usuarioAutenticado);

//en los Promises existen 3 valores
// Pending : no autenticado pero tampoco rechazado esta en espera
//Fulfilled: ya se cumplio
//Rejected: rechazado o no se cumplio


usuarioAutenticado
    .then(function (resultado) {
        console.log(resultado);
    }
        .catch(function (error) {
            console.log(error);
        }
        )
    )