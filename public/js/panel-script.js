const containerForm = document.querySelector('.container-form-new-note');

const btnOpenForm = document.querySelector('.content-add-note');
const btnCloseForm = document.getElementById('button-cancel');



window.onload = () => {
    btnOpenForm.addEventListener('click', function () {
        containerForm.style.animation = "";

        containerForm.classList.remove('hidden');
        containerForm.classList.add('appear');
        

    });

    btnCloseForm.addEventListener('click', () => {

        containerForm.classList.remove('appear');
        containerForm.classList.add('hidden');

    })
} 