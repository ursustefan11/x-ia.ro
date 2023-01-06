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

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .extract(["vue"]);

mix.disableNotifications();

mix.copy("./node_modules/font-awesome/fonts/**", "public/fonts/font-awesome");
mix.copy("resources/js/manage.js", "public/js");
mix.copy("resources/js/helpers.js", "public/js");
