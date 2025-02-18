// Importa Bootstrap
import 'bootstrap';

// Importa Alpine.js
import Alpine from 'alpinejs';

// Importa los estilos de Bootstrap (opcional, si no los importas en app.css)
import 'bootstrap/dist/css/bootstrap.min.css';

// Importa el archivo de estilos personalizados (app.css)
import '../css/app.css';

// Importa Alpine.js (si estás usando Jetstream con Livewire)
window.Alpine = Alpine;
Alpine.start();
