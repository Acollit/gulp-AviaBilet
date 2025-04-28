import { validateForms } from '../functions/validate-forms.js';
import Inputmask from "../../../node_modules/inputmask/dist/inputmask.es6.js";

const inputMask = new Inputmask('+7 (999) 999-99-99');
const phoneInputs = document.querySelectorAll('input[type="tel"]');

phoneInputs.forEach(input => inputMask.mask(input));

function thanks() {
  const graphModal = document.querySelector('.graph-modal');
  const modal7 = document.getElementById('modal7');
  const page = document.querySelector('.page__body');
  const containers = document.querySelectorAll('.graph-modal__container');

  // Убираем классы у всех модальных контейнеров
  containers.forEach(el => {
    el.classList.remove('graph-modal-open', 'fade', 'animate-open');
  });

  // Добавляем классы нужному модальному окну
  modal7.classList.add('graph-modal-open', 'fade', 'animate-open');
  graphModal.classList.add('is-open');

  setTimeout(() => {
    modal7.classList.remove('graph-modal-open', 'fade', 'animate-open');
    graphModal.classList.remove('is-open');
    page.classList.remove('disable-scroll');
  }, 3000);
}



document.addEventListener('wpcf7mailsent', function (event) {
  thanks()
}, false);














