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
mix.js('resources/js/frontend/app.js', 'public/js/compass.js')
    .js('resources/js/frontend/plugins/jquery-3.1.1.min.js','public/js/plugins/')
    .js('resources/js/frontend/plugins/jquery.magnific-popup.min.js','public/js/plugins/')
    .js('resources/js/frontend/plugins/smooth-scroll.min.js','public/js/plugins/')
    .js('resources/js/frontend/plugins/instafeed.min.js','public/js/plugins/')
    .js('resources/js/frontend/plugins/ofi.js','public/js/plugins/')
    .sourceMaps();
mix.sass('resources/sass/frontend/app.scss', 'public/css/compass.css')
    .options({
        processCssUrls: false
    });
mix.styles('resources/sass/frontend/plugins/animate.css','public/css/plugins/animate.css');
mix.styles('resources/sass/frontend/plugins/jquery-ui.css','public/css/plugins/jquery-ui.css');
mix.styles('resources/sass/frontend/plugins/magnific-popup.css','public/css/plugins/magnific-popup.css');

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