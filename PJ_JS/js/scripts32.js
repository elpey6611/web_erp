//Async / await


function descargarNuevosClientes() {
    return new Promise(resolve => {
        console.log('Descargando Clientes ....');

        setTimeout(() => {
            resolve('Los Clientes Fueron Descargados');
        }, 5000);
    });
}


async function app() {
    try {
        const resultado = await descargarNuevosClientes();
        console.log(resultado);
    } catch (error) {
        console.log(error);
    }
}

app();

console.log('Este codigo no se bloqueo');



