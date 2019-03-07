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

mix.js('resources/js/backend/app.js', 'public/js')
   .sass('resources/sass/backend/app.scss', 'public/css');
mix.copyDirectory('resources/js/vendor', 'public/js/vendor');
mix.copyDirectory('resources/images', 'public/images');
mix.disableNotifications();

mix.browserSync({
    proxy: 'wip.test',
    files: [
        './app/**/*.php',
        './public/css/**/*.css',
        './public/js/**/*.js',
        './resources/views/**/*.blade.php'
    ]
});