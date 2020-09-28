let mix = require('laravel-mix');

const source = 'platform/themes/ripple';
const dist = 'public/themes/ripple';

mix
    .sass(source + '/assets/sass/style.scss', dist + '/css')
    .copy(dist + '/css/style.css', source + '/public/css')
    .js(source + '/assets/js/app.js', dist + '/js')
    .copy(dist + '/js/app.js', source + '/public/js');
