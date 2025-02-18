const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        // Aquí puedes agregar plugins de PostCSS si los necesitas
    ])
    .version(); // Opcional: para cache-busting en producción
