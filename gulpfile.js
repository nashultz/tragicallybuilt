const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.publicPath = 'public/themes/default/assets';
elixir.config.resourcePath = 'resources/assets';

elixir.config.css.sass.pluginOptions.includePaths = [
    'node_modules/bootstrap-sass/assets/stylesheets',
    'node_modules/font-awesome/scss'
];

elixir(mix => {
    mix.sass('app.scss')
        .copy('node_modules/sweetalert/dist/sweetalert.min.js', elixir.config.resourcePath+'/js/sweetalert.min.js')
        .copy('node_modules/sweetalert/dist/sweetalert.css', elixir.config.resourcePath+'/css/sweetalert.css')
        .copy('node_modules/font-awesome/fonts', elixir.config.publicPath+'/fonts')
        .copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', elixir.config.resourcePath+'/js/bootstrap.js')
        .copy('node_modules/moment/min/moment.min.js', elixir.config.publicPath+'/js/moment.js')
        .copy('node_modules/simplemde/dist/simplemde.min.js', elixir.config.resourcePath+'/js/simplemde.js')
        .copy('node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', elixir.config.resourcePath+'/js/datepicker.js')
        .copy('node_modules/eonasdan-bootstrap-datetimepicker/src/sass/_bootstrap-datetimepicker.scss', elixir.config.resourcePath+'/sass/datepicker.scss')
        .copy('node_modules/simplemde/dist/simplemde.min.css', elixir.config.resourcePath+'/sass/simplemde.scss')
        .webpack('app.js');
});
