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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/custom/custom.js','public/js/custom.js')
    .js('node_modules/mdbootstrap/js/mdb.js','public/js/mdb.js')
    .sass('node_modules/mdbootstrap/scss/mdb.scss','public/css/mdb.css')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls:true
    })
    .version();

mix.styles('node_modules/bootstrap/dist/css/custom.css','public/css/custom.css').version();
