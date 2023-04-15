const mix = require('laravel-mix');

const vueCustomsComponents = [
	'Sidebar',
//	'MyButton',
//	'MyFormErrors',
];
mix.autoload({
		'jquery': ['jQuery', '$'],
	})
	.js('resources/js/app.js', 'public/js')
/*
	.js('resources/js/app-admin.js', 'public/js').vue({
		options: {
			compilerOptions: {
				isCustomElement: (tag) => vueCustomsComponents.includes(tag),
			},
		},
	})
*/
	.js('node_modules/leaflet', 'public/js')
	.js('node_modules/leaflet-providers', 'public/js')
	.css('node_modules/leaflet/dist/leaflet.css', 'public/css')
	.copy('node_modules/leaflet/dist/images', 'public/images')
	.sass('resources/sass/app.scss', 'public/css')
	.postCss('resources/css/app.css', 'public/css')
	.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')
	.webpackConfig(require('./webpack.config'))
	.vue({version: 3})
;
