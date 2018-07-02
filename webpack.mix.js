let mix = require('laravel-mix');

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

mix.copy('resources/assets/images', 'public/images')
    .copy('resources/assets/tinymce/', 'public/tinymce')
    .js('resources/assets/tinymce/js/tinymce/tinymce.min.js', 'public/tinymce/js/tinymce')
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/admin.js', 'public/js/admin')
    .js('resources/assets/js/admin/tinymce-script.js', 'public/js/admin')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/fontello/css/fontello.css', 'public/css');