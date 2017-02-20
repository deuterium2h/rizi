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

elixir(mix => {
    mix.webpack('app.js')
        .scripts([
    	'libs/jquery-1.11.0.min.js',
    	'libs/gsap/main-gsap.js',
    	'libs/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js',
    	'libs/bootstrap.js',
        'libs/joinable.js',
    	'libs/fileinput.js',
    	'libs/resizeable.js',
    	'libs/neon-api.js',
        'libs/jquery.inputmask.bundle.min.js',
    	// 'libs/jcrop/jquery.Jcrop.min.js',
    	'libs/neon-custom.js'
	], './public/js/libs.js')
		.styles([
        '../js/libs/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css',
		'libs/font-icons/entypo/css/entypo.css',
		'libs/bootstrap.css',
		'libs/neon-core.css',
        'libs/neon-forms.css',
		'libs/neon-theme.css'
	], './public/css/libs.css')
    //     .styles([
    //     'libs/bootstrap.css',
    //     'libs/font-icons/entypo/css/entypo.css',
    //     'libs/neon-welcome.css',
    // ], './public/css/welcome.css')
});
