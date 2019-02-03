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

/*Frontend*/
mix.copy('resources/frontend/js/compass.js', 'public/js/compass.js');
mix.copyDirectory('resources/frontend/js/plugins', 'public/js/plugins');
mix.copyDirectory('resources/frontend/sass/plugins', 'public/css/plugins');
mix.copy('resources/frontend/sass/app.css', 'public/css/compass.css');
mix.styles('resources/frontend/sass/plugins/animate.css', 'public/css/plugins/animate.css');
mix.styles('resources/frontend/sass/plugins/jquery-ui.css', 'public/css/plugins/jquery-ui.css');
mix.styles('resources/frontend/sass/plugins/magnific-popup.css', 'public/css/plugins/magnific-popup.css');


mix.browserSync({
    proxy: 'draft.test',
    files: [
        './app/**/*.php',
        './public/css/**/*.css',
        './public/js/**/*.js',
        './resources/views/**/*.blade.php'
    ]
});