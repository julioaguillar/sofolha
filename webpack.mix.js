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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ])
    .copy(
        'node_modules/@fortawesome/fontawesome-free/webfonts',
        'public/webfonts'
    );

mix.js('resources/js/input-mask.js', 'public/js');

mix.copy('node_modules/jquery/dist/jquery.slim.js', 'public/js/jquery/jquery.js');
mix.copy('node_modules/jquery-mask-plugin/dist/jquery.mask.js', 'public/js/jquery/jquery.mask.js');

