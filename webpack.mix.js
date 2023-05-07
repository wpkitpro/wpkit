const {copyDirectory} = require('laravel-mix');
const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your WpKit application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix
  .setPublicPath('./assets')
  .browserSync('wpkit.local');

mix
  .sass('assets/sass/app.scss', 'assets/css')
  .sass('assets/sass/editor.scss', 'assets/css')
  .options({
    processCssUrls: false,
  });

mix
  .sourceMaps()
  .version();
