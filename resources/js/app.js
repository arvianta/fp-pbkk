import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// JavaScript to handle modal toggling
const modalToggleButtons = document.querySelectorAll('[data-modal-target="static-modal"]');
modalToggleButtons.forEach(button => {
    button.addEventListener('click', () => {
        const dataIndex = button.getAttribute('data-modal-index');
        const modal = document.getElementById(`static-modal-${dataIndex}`);
        modal.classList.remove('hidden');
        modal.classList.add('opacity-100');
    });
});

// JavaScript to handle modal hiding
const modalHideButtons = document.querySelectorAll('[data-modal-hide]');
modalHideButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modalId = button.getAttribute('data-modal-hide');
        const modal = document.getElementById(modalId);
        modal.classList.add('hidden');
        modal.classList.remove('opacity-100');
    });
});