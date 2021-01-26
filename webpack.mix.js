// webpack.mix.js

let mix = require('laravel-mix');

mix.js('assets/js/app.js', 'dist/js/app.js')
    .css('assets/css/app.css', 'dist/css/app.css')
;