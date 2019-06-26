module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		sass: {
			dist: {
				options: {
					sourcemap: 'none'
				},
				files: {
					'css/trazeetravel.css': 'css/trazeetravel.scss',
					'css/whereverfamily.css': 'css/whereverfamily.scss',
					'css/globalusa.css': 'css/globalusa.scss',
					'css/slick.css': 'css/slick.scss'
				}
			}
		},

		cssmin: {
			target: {
				files: [{
					expand: true,
					cwd: 'css',
					src: ['*.css', '!*.min.css'],
					dest: 'css',
					ext: '.min.css'
				}]
			}
		},

		uglify: {
			build: {
				src: 'js/app.js',
				dest: 'js/app.min.js'
			}
		},

		watch: {
			css: {
				files: ['css/*.scss', 'tif-modules/**/**/*.scss', 'css/*.css'],
				tasks: ['sass', 'cssmin'],
				options: {
					spawn: false,
				}
			},
			scripts: {
				files: ['js/*.js'],
				tasks: ['uglify'],
				options: {
					spawn: false,
				},
			}
		}

    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('default', ['sass', 'cssmin', 'uglify', 'watch',]);

};
