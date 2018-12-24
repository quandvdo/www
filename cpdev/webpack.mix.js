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
   .sass('resources/sass/app.scss', 'public/css');
mix.browserSync({
   proxy: 'localhost:8000',
   files: [
      './app/**/*.php',
      './public/css/**/*.css',
      './public/js/**/*.js',
      './resources/views/**/*.blade.php'
   ]
});