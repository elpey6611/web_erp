document.addEventListener('DOMContentLoaded', function () {

    navegacionFija();

    crearGaleria();

    resaltarEnlace();
})


function navegacionFija() {
    const header = document.querySelector('.header')
    const sobreFestival = document.querySelector('.sobre-festival')

    document.addEventListener('scroll', function () {
        if (sobreFestival.getBoundingClientRect().bottom < 1) {
            header.classList.add('fixed')
        }
        else {
            header.classList.remove('fixed')
        }
    })
}

function crearGaleria() {

    const cantidad_imagenes = 16;
    const galeria = document.querySelector('.galeria-imagenes');

    for (let i = 1; i <= cantidad_imagenes; ++i) {
        const imagen = document.createElement('IMG');
        imagen.src = `src/img/gallery/full/${i}.jpg`;
        imagen.alt = 'Imagen Galeria';

        //event handler
        imagen.onclick = function () {
            mostrarImagen(i);
        }
        galeria.appendChild(imagen);
    }
}


function mostrarImagen(i) {
    //mostrar imagen
    const imagen = document.createElement('IMG')
    imagen.src = `src/img/gallery/full/${i}.jpg`
    imagen.alt = 'Imagen Galeria'

    //generar modal
    const modal = document.createElement('DIV')
    modal.classList.add('modal')
    modal.ondblclick = function () {
        CerrarModal()
    }

    //boton cerrar
    const cerrarModalBtn = document.createElement('BUTTON')
    cerrarModalBtn.textContent = 'X'
    cerrarModalBtn.classList.add('btn-cerrar')
    cerrarModalBtn.onclick = CerrarModal
    modal.appendChild(imagen)
    modal.appendChild(cerrarModalBtn)

    //agregar al html
    const body = document.querySelector('body')
    body.classList.add('overflow-hidden')
    body.appendChild(modal)

}

function CerrarModal() {
    console.log('Desde cerrar modal');
    const modal = document.querySelector('.modal');
    modal.classList.add('fade-out')
    setTimeout(() => {
        if (modal) {
            //modal.removeChild();
            modal.remove();

            const body = document.querySelector('body')
            body.classList.remove('overflow-hidden')

        }
    }, 500);
}

function resaltarEnlace() {
    document.addEventListener('scroll', function () {
        const sections = document.querySelectorAll('section')
        const navlinks = document.querySelectorAll('.navecacion-principal a')

        let actual = '';
        sections.forEach( section => {
            const sectionTop = section.offsetTop
            const sectionHeight = section.clientHeight
            if (document.scrollY >= (sectionTop - sectionHeight / 3)) {
                actual = section.id
            }
        })

        navlinks.forEach(link => {
            link.classList.remove('active')
            if (this.links.getAttribute('href') === '#' + actual) {
                this.links.classList.add('active')
            }
        })
    })
}

function scrollNav()
{
    const navLinks = document.querySelector('.navegacion-principal a')

    navLinks.forEach( link => {
        link.addEventListener('click', e =>{
            e.preventDefault()

            const sectionScroll = e.target.getAttribute('href')

            const section = document.querySelector(sectionScroll)

            section.scrollIntoView({behavior: 'smooth'})
        })
    })
}