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
    
	$css_files = [
	// './public/assets/bootstrap/css/bootstrap.min.css',
	'./public/assets/css/font-awesome.min.css',
	'./public/assets/css/et-line-font.css',
	'./public/assets/css/simpletextrotator.css',
	'./public/assets/css/magnific-popup.css',
	'./public/assets/css/owl.carousel.css',
	'./public/assets/css/superslides.css',
	'./public/assets/css/vertical.css',
	'./public/assets/css/animate.css',
	'./public/assets/css/style.css',
	];
	
    $js_files =[
    './public/assets/js/jquery-2.1.3.min.js',
	'./public/assets/bootstrap/js/bootstrap.min.js',
	'./public/assets/js/jquery.superslides.min.js',
	'./public/assets/js/jquery.mb.YTPlayer.min.js',
	'./public/assets/js/jquery.magnific-popup.min.js',
	'./public/assets/js/owl.carousel.min.js',
	'./public/assets/js/jquery.simple-text-rotator.min.js',
	'./public/assets/js/imagesloaded.pkgd.js',
	'./public/assets/js/isotope.pkgd.min.js',
	'./public/assets/js/packery-mode.pkgd.min.js',
	'./public/assets/js/appear.js',
	'./public/assets/js/jquery.easing.1.3.js',
	'./public/assets/js/wow.min.js',
	'./public/assets/js/jqBootstrapValidation.js',
	'./public/assets/js/jquery.fitvids.js',
	'./public/assets/js/jquery.parallax-1.1.3.js',
	'./public/assets/js/smoothscroll.js',
	'./public/assets/js/contact.js',
	'./public/assets/js/custom.js'];

    mix.scripts($js_files);
	mix.styles($css_files);
	//mix.styles('*.css');
    //mix.styles('styles.css');
    // mix.sass('app.scss')
    //    .webpack('app.js');
});
