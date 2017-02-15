var modal;

function init() {
    'use strict';
    init_controller();
    
    modal = document.getElementById('modal');

    document.getElementById('impressum')
        .addEventListener('click', function () {
            modal.style.display = 'block';
        });

    document.getElementById('close')
        .addEventListener('click', function () {
            modal.style.display = 'none';
        });
}

document.onload = init();