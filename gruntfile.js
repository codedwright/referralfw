(function () {
    'use strict';
}());
// require('load-grunt-tasks')(grunt);
module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		build: '<%= new Date().getTime() %>',
		product: '<%= _.capitalize(pkg.name) %>',
		copyrightNotice: 'Copyright (c) <%= grunt.template.today("yyyy") %> Foo.',
		banner: 
			"/*!\n" +
			" * <%= product %> v.<%= pkg.version %>\n" +
			" * <%= copyrightNotice %>\n" +
			" *\n" +
			" * Author: <%= pkg.author.name %> (<%= pkg.author.email %>).\n" +
			" */\n\n",

		concat: {
            options: {
				stripBanners: false,
				banner: '<%= banner %>',
				separator: '\n'
			},
			lib: {
				src: [
					'node_modules/bootstrap/dist/js/bootstrap.js', 
					'node_modules/jquery/dist/jquery.js',
					'node_modules/popper.js/dist/popper.js',
					'node_modules/angular-sanitize/angular-sanitize.js',
					'node_modules/ngmap/build/scripts/ng-map.js'
				],
                dest: 'styles.js'
			},
            dist: {
                src: [
					'js/*.js'
				],
                dest: '<%= pkg.name %>.js'
            }
        },

		uglify: {
			options: {
				banner: '<%= banner %>',
				mangle: false,
			},
			lib: {
				src: 'scripts.js',
				dest: 'scripts.min.js'
			},
			build: {
				src: '<%= pkg.name %>.js',
				dest: '<%= pkg.name %>.min.js'
			}
		},

		// jshint: {
		// 	files: ['gruntfile.js', 'js/portfolio.js'],
		// 	options: {
		// 		globals: {
		// 			jQuery: true,
		// 			console: true,
		// 			module: true
		// 		}
		// 	}
		// },


		// npm i grunt-sass --save-dev
		sass: {
			options: {
				outputStyle: 'expanded', // nested, expanded, compact, compressed
				sourceMap: true
			},
			dist: {
				files: {
					'css/styles.css': 'css/styles.scss'
				}
			}
		},

		bump: {
			options: {
				files: ['package.json'],
				updateConfigs: [],
				commit: true,
				commitMessage: 'Release v%VERSION%',
				commitFiles: ['package.json'],
				createTag: true,
				tagName: 'v%VERSION%',
				tagMessage: 'Version %VERSION%',
				push: true,
				pushTo: 'origin',
				gitDescribeOptions: '--tags --always --abbrev=1 --dirty=-d',
				globalReplace: false,
				prereleaseName: false,
				metadata: '',
				regExp: false
			}
		},

		watch: {
			options: {
		    	livereload: true
		    },
			css: {
				files: '**/*.scss',
	            tasks: 'scss',
	            
			},
			js: {
				files: ['js/*.js', 'js/**/*.js'],
				tasks: ['concat', 'uglify'],
            },
            html: {
            	files: ['**/*.html', '**/*.php']
			},
			livereload: {
				options: {
					livereload: true
				},
				files: ['css/styles.css']
			}
        }	


	});

	// Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify-es');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-sass');

	// Default task(s).
	grunt.registerTask('default', ['concat', 'uglify:build']);
	grunt.registerTask('build', ['scss', 'concat', 'uglify:lib', 'uglify:build']);
	grunt.registerTask('scss', ['sass']);

	// https://github.com/semantic-release/semantic-release
	// https://docs.npmjs.com/getting-started/semantic-versioning
	grunt.loadNpmTasks('grunt-bump');
};