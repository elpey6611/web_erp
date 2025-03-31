//obtener valores de html

const vbtn = document.querySelector('#btn1');


vbtn.addEventListener('click', function()
{
   Notification.requestPermission()
   .then(resultado => console.log(`El resultado es ${resultado}`))
}
);


if(Notification.permission=='granted')
{
     new Notification('Esta es una Notificacion',
     {
         icon:'img/zitrus.jpg',
         body: 'Codigo de Prueba Pedro Mercado'
     }
     )
} 
