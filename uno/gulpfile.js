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
		name: pkg.themename,
		homepage: pkg.homepage,
		description: pkg.description,
		author: pkg.author,
		version: pkg.version,
		license: pkg.license,
		template: pkg.template,
		textdomain: pkg.name
	},
	src: {
		php: ['**/*.php', '!vendor/**'],
		images: 'assets/images/**/*',
		scss: 'assets/scss/**/*.scss',
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
				src: 'assets/scss/style.scss',
				dest: './',
				outputStyle: 'compressed'
			}
		}
	},
	js: {
		'theme' : [
			'assets/js/*.js'
		],
	},
	dest: {
		i18npo: 'dist/languages/',
		i18nmo: 'dist/languages/',
		images: 'dist/images/',
		css: 'dist/css',
		js: 'dist/js'
	}
});

toolkit.extendTasks(gulp);