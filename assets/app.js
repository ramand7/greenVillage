import './styles/app.css';
import React from 'react';
import { createRoot } from 'react-dom/client';
import HelloReact from './components/HelloReact';

const rootElement = document.getElementById('react-root');
if (rootElement) {
    const root = createRoot(rootElement);
    root.render(<HelloReact />);
}
