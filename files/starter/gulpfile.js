'use strict';

/**
 * Dependencies.
 *
 * @since 0.0.1
 */
var gulp    = require('gulp');
var toolkit = require('gulp-wp-toolkit');
var pkg     = require('./package');

/**
 * Setup toolkit config defaults.
 *
 * @since 0.0.1
 */
toolkit.extendConfig({
	theme: {
		name: pkg.name,
		homepage: pkg.homepage,
		description: pkg.description,
		author: pkg.author,
		version: pkg.version,
		license: pkg.license,
		template: pkg.template,
		textdomain: pkg.name.toLowerCase()
	},
	src: {
		php: ['**/*.php', '!vendor/**'],
		images: 'assets/images/**/*',
		scss: 'assets/styles/**/*.scss',
		css: ['**/*.css', '!node_modules/**', '!assets/vendor/**'],
		js: ['assets/js/**/*.js', '!node_modules/**'],
		json: ['**/*.json', '!node_modules/**'],
		i18n: 'assets/languages/'
	},
	css: {
		basefontsize: 16,
		remreplace: false,
		remmediaquery: true,
		scss: {
			'style': {
				src: 'assets/styles/main.scss',
				dest: './',
				outputStyle: 'compressed'
			}
		}
	},
	js: {
		'theme' : [
			'assets/js/theme/*.js'
		],
		'standalone' : [
			'assets/scss/*.scss'
		]
	},
	dest: {
		i18npo: 'dist/languages/',
		i18nmo: 'dist/languages/',
		images: 'dist/images/',
		css: 'dist/css',
		js: 'dist/js'
	},
	// server: {
	// 	url: example.dev
	// }
});

toolkit.extendTasks(gulp);