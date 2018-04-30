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
			scripts: {
				src: [
					'node_modules/bootstrap/dist/js/bootstrap.js' 
				],
                dest: 'assets/js/scripts.js'
			},
			jquery: {
				src: 'node_modules/jquery/dist/jquery.js',
                dest: 'assets/js/jquery.js'
			},
			popper: {
				src: 'node_modules/popper.js/dist/popper.js',
                dest: 'assets/js/popper.js'
			},
            dist: {
                src: [
					'assets/js/*/*.js'
				],
                dest: 'assets/js/<%= pkg.name %>.js'
            }
        },

		uglify: {
			options: {
				// banner: '<%= banner %>',
				mangle: false,
			},
			lib: {
				src: 'assets/js/scripts.js',
				dest: 'assets/js/scripts.min.js'
			},
			jquery: {
				src: 'assets/js/jquery.js',
				dest: 'assets/js/jquery.min.js'
			},
			popper: {
				src: 'assets/js/popper.js',
				dest: 'assets/js/popper.min.js'
			},
			build: {
				src: 'assets/js/<%= pkg.name %>.js',
				dest: 'assets/js/<%= pkg.name %>.min.js'
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
			bootstrap: {
				files: {
					'assets/css/meta-boxes.css': 'assets/css/meta-boxes.scss'
				}
			},
			dist: {
				files: {
					'assets/css/styles.css': 'assets/css/styles.scss'
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
				files: 'assets/**/*.scss',
	            tasks: 'scss',
	            
			},
			js: {
				files: ['assets/js/*.js', 'assets/js/**/*.js'],
				tasks: ['concat', 'uglify'],
            },
            html: {
            	files: ['**/*.html', '**/*.php']
			},
			livereload: {
				options: {
					livereload: true
				},
				files: ['assets/css/styles.css']
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
	grunt.registerTask('default', ['concat:dist', 'uglify:build']);
	grunt.registerTask('build', ['scss', 'concat', 'uglify']);
	grunt.registerTask('scss', ['sass:dist', 'sass:bootstrap']);

	// https://github.com/semantic-release/semantic-release
	// https://docs.npmjs.com/getting-started/semantic-versioning
	grunt.loadNpmTasks('grunt-bump');
};