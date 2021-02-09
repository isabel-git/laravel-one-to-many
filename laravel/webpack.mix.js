const mix = require('laravel-mix');

/*
   da delle info sul css e js
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .browserSync({
        proxy: '127.0.0.1:8000', //localhost::3000
        notify: false,
        open: false
    });;
