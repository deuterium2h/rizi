const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir(mix => {
	mix.scripts([
		'libs/jquery-1.11.0.min.js',
		'libs/gsap/main-gsap.js',
		'libs/bootstrap.js',
		'libs/joinable.js',
		'libs/neon-slider.js',
		'libs/lity.js',
		'libs/bootstrap-inputmask.min.js',
		'libs/neon-custom-user.js',
		'libs/sweetalert-dev.js'
	], './public/js/user.js')
		.styles([
		'libs/bootstrap.css',
		'libs/font-icons/entypo/css/entypo.css',
		'libs/lity.css',
		'libs/neon-welcome.css',
		'libs/sweetalert.css'
	], './public/css/user.css')
});

elixir(mix => {
	mix.webpack('app.js')
		.scripts([
		'libs/jquery-1.11.0.min.js',
		'libs/gsap/main-gsap.js',
		'libs/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js',
		'libs/bootstrap.js',
		'libs/joinable.js',
		'libs/resizeable.js',
		'libs/jquery.inputmask.bundle.min.js',
		'libs/fileinput.js',
		'libs/neon-api.js',
		// 'libs/jcrop/jquery.Jcrop.min.js',
		'libs/neon-custom.js',
		'libs/dropzone.js',
		'libs/lity.js',
		'libs/sweetalert-dev.js'
	], './public/js/libs.js')
		.styles([
		'../js/libs/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css',
		'libs/font-icons/entypo/css/entypo.css',
		'libs/bootstrap.css',
		'libs/neon-core.css',
		'libs/neon-forms.css',
		'libs/neon-theme.css',
		'libs/custom.css',
		'libs/lity.css',
		'libs/dropzone.css',
		'libs/sweetalert.css'
	], './public/css/libs.css')
});
