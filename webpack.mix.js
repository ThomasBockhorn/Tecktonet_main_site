const mix = require("laravel-mix");

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

//mix.js('resources/js/app.js', 'public/js')
//.sass('resources/sass/app.scss', 'public/css');

//combines all the css together
mix.styles(
    [
        "public/css/template/colors/*.css",
        "public/css/template/style.css",
        "public/css/plugins/themefisher-font/style.css",
        "public/css/app.css",
        "public/css/logo.css",
        "public/css/modal.css",
        "public/css/sb-admin.min.css",
        "public/css/fontawesome.css"
    ],
    "public/css/all.css"
);
