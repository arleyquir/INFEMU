function mostrarNombreArchivo() {
    var input = document.getElementById('imagen');
    var fileLabel = document.getElementById('fileLabel');
    
    if (input.files && input.files.length > 0) {
        fileLabel.textContent = input.files[0].name;
    } else {
        fileLabel.textContent = "Seleccionar Imagen";
    }
}

const customSelectWrapper = document.querySelector('.custom-select-wrapper');
const display = customSelectWrapper.querySelector('.custom-select-display');
const optionsContainer = customSelectWrapper.querySelector('.custom-options');
const options = optionsContainer.querySelectorAll('div');
const selectElement = customSelectWrapper.querySelector('select');

display.addEventListener('click', () => {
    optionsContainer.style.display = optionsContainer.style.display === 'block' ? 'none' : 'block';
    display.classList.toggle('active');
});

options.forEach(option => {
    option.addEventListener('click', () => {
        display.querySelector('span').textContent = option.querySelector('span').textContent;
        selectElement.value = option.getAttribute('data-value');
        optionsContainer.style.display = 'none';
        display.classList.remove('active');
    });
});

document.addEventListener('click', (e) => {
    if (!customSelectWrapper.contains(e.target)) {
        optionsContainer.style.display = 'none';
        display.classList.remove('active');
    }
});