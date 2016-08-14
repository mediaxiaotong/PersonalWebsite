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

elixir(function (mix) {
    mix.sass('app.scss');

    mix.styles([
        'animate.min.css',
        'bootstrap.min.css',
        'font-awesome.min.css',
        'jquery.fullPage.css',
        'swiper.css'
    ], './public/assets/css/libs.css');

    mix.scripts([
            'jquery.min.js',
            'bootstrap.min.js',
            'jquery.fullPage.min.js',
            'jquery.nicescroll.js',
            'jquery.slim.min.js',
            'scrollReveal.min.js',
            'swiper.jquery.min.js'
        ],
        './public/assets/js/libs.js');
});
