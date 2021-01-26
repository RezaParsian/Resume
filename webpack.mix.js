const mix = require('laravel-mix');

/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
|
| Mix provides a clean, fluent API for defining some Webpack build steps
| for your Laravel applications. By default, we are compiling the CSS
| file for the application as well as bundling up all the JS files.
|
*/

mix.styles([
    'resources/css/animate.css',
    'resources/css/bootstrap.min.css',
    'resources/css/bootstrap-rtl.css',
    'resources/css/font-awesome.min.css',
    'resources/css/magnific-popup.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/slicknav.min.css',
    'resources/css/style.css',
],"public/css/app.css");

mix.js([
    'resources/js/bootstrap.min.js',
    'resources/js/jquery-3.2.1.min.js',
    'resources/js/jquery.magnific-popup.min.js',
    'resources/js/jquery.slicknav.min.js',
    'resources/js/jquery.sticky-sidebar.min.js',
    'resources/js/owl.carousel.min.js',
    'resources/js/main.js'
],"public/js/app.js");