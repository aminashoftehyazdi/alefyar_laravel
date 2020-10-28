const mix = require('laravel-mix');

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
	'resources/assets/vendor/bootstrap/css/bootstrap.min.css',
	'resources/views/front/assets/css'
		
	],
	'public/front/assets/css/main.css'
);


mix.scripts(
	[
		
	],
	'public/front/assets/js/main.js'
);
