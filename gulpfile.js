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

var components = './resources/components';

var paths = {
    'css': 'public/css/',
    'fonts': 'public/fonts/',
    'js': 'public/js/'
};

elixir(function(mix) {
    mix.sass([
        'which.scss'
    ], paths.css + 'which.css');

    mix.scripts([
        'which.js'
    ], paths.js + 'which.js');

    mix.copy(components + '/font-awesome/fonts', paths.fonts);
    mix.copy(components + '/font-awesome/css/font-awesome.min.css', paths.css);

    mix.version([
        'css/which.css',
        'js/which.js'
    ]);
});

