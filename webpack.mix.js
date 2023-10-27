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
  .sass('resources/sass/app.scss', 'public/css')
  .options({ processCssUrls: false })
  .vue();

// mix.copyDirectory('resources/assets/fonts', 'public/fonts');
// mix.copyDirectory('resources/assets/images', 'public/images');

mix.copyDirectory('resources/assets/img', 'public/img');
// mix.copyDirectory('resources/assets/fonts', 'public/fonts');