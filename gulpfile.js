var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	mix.sass('app.scss');
    mix.copy(
    	'vendor/bower/jquery/dist/jquery.min.js',
    	'public/js/vendor/jquery.js'
    )
    .copy(
    	'vendor/bower/bootstrap-sass-official/assets/javascripts/bootstrap.js',
    	'public/js/vendor/bootstrap.js'
    )
    .copy(
    	'vendor/bower/fontawesome/css/font-awesome.min.css',
    	'public/css/vendor/font-awesome.css'
    )
    .copy(
    	'vendor/bower/fontawesome/fonts/',
    	'public/css/fonts'
    );
});
