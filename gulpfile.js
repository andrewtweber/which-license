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
    'publicCss': 'public/css/',
    'publicJs': 'public/js/'
};

elixir(function(mix) {
    mix.sass([
        'which.scss'
    ], paths.publicCss + 'which.css');

    mix.scripts([
        'which.js'
    ], paths.publicJs + 'which.js');

    mix.copy(components + '/font-awesome/fonts', 'public/fonts');
    mix.copy(components + '/font-awesome/css/font-awesome.min.css', 'public/css');

    mix.version([
        'css/which.css',
        'js/which.js'
    ]);
});

