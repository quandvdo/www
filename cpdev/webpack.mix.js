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
mix.js('resources/js/frontend/compass.js', 'public/js/compass.js')
    .sourceMaps();
mix.copyDirectory('resources/js/frontend/plugins', 'public/js/plugins');
mix.copyDirectory('resources/sass/frontend/plugins', 'public/css/plugins');
mix.copy('resources/sass/frontend/app.css', 'public/css/compass.css');
mix.styles('resources/sass/frontend/plugins/animate.css', 'public/css/plugins/animate.css');
mix.styles('resources/sass/frontend/plugins/jquery-ui.css', 'public/css/plugins/jquery-ui.css');
mix.styles('resources/sass/frontend/plugins/magnific-popup.css', 'public/css/plugins/magnific-popup.css');

// BrowserSync
mix.browserSync({
    proxy: 'cpdev.test',
    files: [
        './app/**/*.php',
        './public/css/**/*.css',
        './public/js/**/*.js',
        './resources/views/**/*.blade.php'
    ]
});
mix.autoload({
    jQuery: 'jquery',
    $: 'jquery',
    jquery: 'jquery'
});