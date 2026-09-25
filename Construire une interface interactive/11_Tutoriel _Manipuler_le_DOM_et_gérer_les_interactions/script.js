const btnShow = document.querySelector('#btn-show-form');
const sectionForm = document.querySelector('#section-form');

btnShow.addEventListener('click', () => {
    btnShow.hidden = true;
    sectionForm.hidden = false;
});