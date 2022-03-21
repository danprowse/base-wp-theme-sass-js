let mix = require('laravel-mix');

mix.js('src/app.js', 'js').react().sass('src/app.scss', 'css').setPublicPath('dist');

// Wordpress comes with JQuery
// mix.autoload({
//   jquery: ['$', 'window.jQuery']
// });