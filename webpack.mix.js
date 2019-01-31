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
   mix.scripts([
      'node_modules/vue/dist/vue.js',
      'node_modules/axios/dist/axios.js',
      'node_modules/bootstrap/dist/bootstrap.js',
      'node_modules/toastr/toastr.js',

       
      'resources/js/app.js',
   ],   'public/js/app.js')
   
   .styles([
      'node_modules/toastr/build/toastr.css',
      'node_modules/bootstrap/scss/bootstrap.scss',
   
   ],  'public/css/app.css');  


   //mix.js('resources/js/app.js', 'public/js')
  // .sass('resources/sass/app.scss', 'public/css');
