const mix = require('laravel-mix');


/**
 * Setup public path to generate assets
 */
mix.setPublicPath('assets');

/**
 * Autoload jQuery
 */
mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
});

/**
 * Compile JavaScript
 */
mix.js('resources/js/app.js', 'assets/js/app.js').sourceMaps(false);

/**
 * Compile Sass
 */
mix.sass('resources/sass/app.scss', 'assets/css/app.css');


/**
 * Fonts
 */
mix.copyDirectory('resources/fonts', 'assets/fonts')