//this

//objeto
const reservacion ={
nombre: 'max',
apellido: 'artiga',
total: 5000,
pagado: false,
informacion: function()
{
  console.log(`El Cliente ${this.nombre} reservo y su cantidad a pagar es de ${this.total}`)
}
}


const reservacion2 ={
  nombre: 'goldo',
  apellido: 'artiga',
  total: 5000,
  pagado: false,
  informacion: function()
  {
    console.log(`El Cliente ${this.nombre} reservo y su cantidad a pagar es de ${this.total}`)
  }
  }
  
reservacion.informacion();
reservacion2.informacion();