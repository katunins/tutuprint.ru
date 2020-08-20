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

mix.js('resources/js/index.js', 'public/js')
    .js('resources/js/mobile-mask.js', 'public/js')
    .sass('resources/sass/template.scss', 'public/css')
    .sass('resources/sass/index.scss', 'public/css')
    .sass('resources/sass/personal.scss', 'public/css')
    .sass('resources/sass/signin.scss', 'public/css');
