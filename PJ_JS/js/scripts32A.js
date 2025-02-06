//Async / await


function descargarNuevosClientes() {
    return new Promise(resolve => {
        console.log('Descargando Clientes ....');

        setTimeout(() => {
            resolve('Los Clientes Fueron Descargados');
        }, 5000);
    });
}

function descargarUltimoPedido() {
    return new Promise(resolve => {
        console.log('Descargando pedidos... espere');

        setTimeout(() => {
            resolve('Los Pedidos fueron Descargados');
        }, 3000);
    });
}


async function app() {
    try {
        // const resultado = await descargarNuevosClientes();
        // const pedidos = await descargaUltimoPedidos();
        // console.log(resultado);
        // console.log(pedidos);
        const resultado = await Promise.all([descargarNuevosClientes(), descargarUltimoPedido()]);
        console.log(resultado[0]);
        console.log(resultado[1]);
    } catch (error) {
        console.log(error);
    }
}

app();

console.log('Este codigo no se bloqueo');



