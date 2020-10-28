const mix = require("laravel-mix");
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
mix.styles(
	[
		"resources/views/front/assets/vendor/bootstrap/css/bootstrap.min.css",
		"resources/views/front/assets/vendor/ionicons/css/ionicons.min.css",
		"resources/views/front/assets/vendor/font-awesome/css/font-awesome.min.css",
		"resources/views/front/assets/vendor/venobox/venobox.css",
		"resources/views/front/assets/vendor/owl.carousel/assets/owl.carousel.min.css",
		"resources/views/front/assets/vendor/aos/aos.css",
		"resources/views/front/assets/css/style.css"		
	],
	"public/front/assets/css/app.css"
);
mix.scripts(
	[	"resources/views/front/assets/vendor/jquery/jquery.min.js",
		"resources/views/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
		"resources/views/front/assets/vendor/jquery.easing/jquery.easing.min.js",
		"resources/views/front/assets/vendor/php-email-form/validate.js",
		"resources/views/front/assets/vendor/isotope-layout/isotope.pkgd.min.js",
		"resources/views/front/assets/vendor/counterup/counterup.min.js",
		"resources/views/front/assets/vendor/venobox/venobox.min.js",
		"resources/views/front/assets/vendor/owl.carousel/owl.carousel.min.js",
		"resources/views/front/assets/vendor/waypoints/jquery.waypoints.min.js",
		"resources/views/front/assets/vendor/aos/aos.js",
		"resources/views/front/assets/js/main.js"
	],
	"public/front/assets/js/app.js"
);