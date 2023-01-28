const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js([
    'resources/assets/js/off-canvas.js',
    'resources/assets/js/dashboard.js',
    'resources/assets/js/todolist.js',
    'resources/assets/js/misc.js',
    'resources/assets/js/hoverable-collapse.js',
], 'public/js/common.js')
    .sass('resources/sass/app.scss', 'public/css')
    .postCss('resources/assets/css/style.css','public/css/common.css')
    .sourceMaps();
