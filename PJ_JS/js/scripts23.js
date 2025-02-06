//SWITCH
const metodopago ='bit';

switch (metodopago)
{
  case 'tarjeta':
    {
      console.log('pagaste con tarjeta');
      break;
    }
    default:
      {
        console.log('Aun no has Pagado');
        break;
      }
}