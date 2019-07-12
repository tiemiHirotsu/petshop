const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
        'popper.js/dist/umd/popper.js': ['Popper']})
    .js('node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js','public/js')
    .sass('resources/sass/app.scss', 'public/css');
