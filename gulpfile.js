var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.sass('app.scss');

    mix.styles([
        'bootstrap.min.css',
        'animate.min.css',
        'font-awesome.min.css',
        'ch-ui.admin.css'
    ],'./public/css/libs.css');
    
    mix.scripts([
        'jquery.min.js',
        'bootstrap.min.js',
        'layer.js',
        'ch-ui.admin.js'
    ],
    './public/js/libs.js');
});
