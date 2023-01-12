const { copyDirectory } = require('laravel-mix');
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
    .setPublicPath('./public')
    .browserSync('wpkit.local');

mix
    .sass('resources/styles/app.scss', 'styles')
    .sass('resources/styles/editor.scss', 'styles')
    .options({
        processCssUrls: false,
    });

mix
    .js('resources/scripts/app.js', 'scripts')
    .js('resources/scripts/customizer.js', 'scripts')
    .blocks('resources/scripts/editor.js', 'scripts')
    .autoload({ jquery: ['$', 'window.jQuery'] });

mix
    .copyDirectory('resources/images', 'public/images')
    .copyDirectory('resources/fonts', 'public/fonts');

mix
    .sourceMaps()
    .version();
