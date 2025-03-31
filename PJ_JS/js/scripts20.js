const reproductor=
{
    reproducir : function(id)
    {
        //console.log('Reproducir Cancion');

        console.log(`Reproducir Cancion id : ${id}`)
    },

    pausar: function()
    {
        console.log('pausando cancion')
    },

    crearplaylist: function(nombre)
    {
        console.log(`Creando la PlayList : ${nombre}`)
    },

    reproducirplaylist: function(nombre)
    {
        console.log(`Reproducir la PlayList : ${nombre}`)
    }
}

reproductor.borrarCancion = function(id)
{
    console.log(`Eliminando cancion ${id}`)
}

//reproducir.reproducir();

reproductor.reproducir(3840);

reproductor.pausar();

reproductor.borrarCancion(3840);

reproductor.crearplaylist('Heavy Metal');

reproductor.reproducirplaylist('Heavy Metal');