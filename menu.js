
import '';

//Función que se lanza al hacer click
function toggleMenu() {
    menu.classList.toggle('menu');
}

//elemento que quiero mostrar/ocultar
const menu = document.querySelector('.menu');

//elemento que dispara la acción
const btn = document.querySelector('.btn');

//evento asociado
btn.addEventListener('click', toggleMenu);
