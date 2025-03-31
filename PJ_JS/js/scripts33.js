//Fetch API
async function obtenerEmpleados() {

    const vurl = 'Json/Empleados.json';

    // fetch(vurl)
    //    .then(resultado =>
    //     {
    //         return resultado.json();
    //     })
    //     .then (datos=>
    //     {
    //         const {empleados} = datos;
    //         console.log(empleados);
    //     }
    //     )
    const resultado = await fetch(vurl);
    const datos = await resultado.json();
    console.log(datos);
}

obtenerEmpleados();



