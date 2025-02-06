//query selector
//retorna 1 o nunguno  elemento que concuerde con el selector 
//que se escribe
const vheading = document.querySelector('.header__texto h2');
vheading.textContent ='Nuevo Heading';
vheading.classList.add('nueva-clase');
console.log(vheading); 

//query selector all

const enlaces = document.querySelectorAll('.navegacion a');
enlaces[0].textContent = "Nuevo Texto para Enlace";
enlaces[0].classList.add('Nueva-clase');

//console.log(enlaces[0]);


//getElementById

// const heading3 = document.getElementById('heading3');

// console.log(heading3);

//generar un nuevo enlace
const nuevoEnlace = document.createElement('H1');

//agregar el href
nuevoEnlace.href = 'nuevo-enlace.html';

//agregar texto 

nuevoEnlace.textContent='Un Nuevo Enlace';

//agregar la clase

nuevoEnlace.classList.add('navegacion__enlace')



//agregar al documento

const navegacion1 = document.querySelector('.navegacion');

navegacion1.appendChild(nuevoEnlace);

console.log(nuevoEnlace);
