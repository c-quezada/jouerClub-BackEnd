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
/* 
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
 */

mix.styles([
    'resources/assets/bootstrap/css/bootstrap.min.css',
    'resources/assets/font-awesome/css/fontawesome-all.min.css',
    'resources/assets/css/style.css',
    'resources/assets/css/owl.carousel.min.css'
], 'public/css/app.css');

mix.js([
    'resources/assets/js/jquery-3.3.1.min.js',
    'resources/assets/js/popper.min.js',
    'resources/assets/bootstrap/js/bootstrap.min.js',
    'resources/assets/js/imagesloaded.pkgd.min.js',
    'resources/assets/js/isInViewport.jquery.js',
    'resources/assets/js/jquery.particleground.min.js',
    'resources/assets/js/owl.carousel.min.js',
    'resources/assets/js/scrolla.jquery.min.js',
    'resources/assets/js/jquery.validate.min.js',
    'resources/assets/js/jquery-validate.bootstrap-tooltip.min.js',
    'resources/assets/js/jquery.wavify.js',
    'resources/assets/js/custom.js'
], 'public/js/app.js');

