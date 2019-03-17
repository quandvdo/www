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

mix.js('resources/frontend/js/compass.js', 'public/assets/js')
    .sass('resources/frontend/sass/compass.scss', 'public/assets/css');

mix.copy('resources/frontend/images', 'public/assets/images');
mix.copy('node_modules/tinymce/skins', 'public/assets/js/skins');


mix.combine([
    'resources/backend/js/vendor/jquery-3.3.1.min.js',
    'resources/backend/js/vendor/bootstrap.bundle.min.js',
    'resources/backend/js/vendor/perfect-scrollbar.min.js',
    'resources/backend/js/vendor/datatables.min.js',
], 'public/assets/js/common-bundle-script.js');

mix.js('resources/backend/js/script.js', 'public/assets/js/script.js')
    .sass('resources/backend/styles/sass/themes/lite-purple.scss', 'public/assets/css/theme.min.css')

    .options({
        processCssUrls: false
    })
    .styles('resources/backend/styles/vendor/perfect-scrollbar.css', 'public/assets/css/vendor/perfect-scrollbar.css')
    .styles('resources/backend/styles/vendor/datatables.css', 'public/assets/css/vendor/datatables.min.css');

mix.copy('resources/backend/images', 'public/assets/images');
mix.copy('resources/backend/fonts', 'public/assets/fonts');


mix.disableNotifications();

mix.browserSync({
    proxy: 'compa.test',
    files: [
        './app/**/*.php',
        './public/css/**/*.css',
        './public/js/**/*.js',
        './resources/views/**/*.blade.php'
    ]
});