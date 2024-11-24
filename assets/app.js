import './styles/app.css';
import React from 'react';
import { createRoot } from 'react-dom/client';
import HelloReact from './components/HelloReact';

const rootElement = document.getElementById('react-root');
if (rootElement) {
    const root = createRoot(rootElement);
    root.render(<HelloReact />);
}

document.addEventListener('DOMContentLoaded', function () {
    // Ajoute un comportement de toggle pour les sous-menus
    const dropdownSubmenus = document.querySelectorAll('.dropdown-submenu');
    dropdownSubmenus.forEach(function (submenu) {
        submenu.addEventListener('click', function (event) {
            event.stopPropagation(); // Empêche la propagation vers le menu parent
            this.classList.toggle('show'); // Affiche ou masque le sous-menu
        });
    });
});
