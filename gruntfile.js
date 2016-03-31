module.exports = function(grunt) {

    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            options: {
                stripBanners: true,
                banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
                    '<%= grunt.template.today("yyyy-mm-dd") %> */',
            },
            dist: {
                src: [
                    'src/js/libs/*.js',
                    'src/js/main.js'
                ],
                dest: 'dist/js/production.js',
            }
        },

        uglify: {
            build: {
                src: 'dist/js/production.js',
                dest: 'dist/js/production.min.js',
            }
        },

        imagemin: {
            dynamic: {

                options: {                       // Target options
       optimizationLevel: 5
                          },
                files: [{
                    expand: true,
                    cwd: 'src/img/raw/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'dist/img/'
                }]
            }
        },

        sass: {
            dev: {
                files: {
                    'dist/css/global.css': 'src/scss/global.scss'
                }
            }

        },

        postcss: {
            options: {

                map: {
                    inline: false, // save all sourcemaps as separate files...
                    annotation: 'dist/css/maps/' // ...to the specified directory
                },

                processors: [
                    require('pixrem')(), // add fallbacks for rem units
                    require('autoprefixer')({
                        browsers: 'last 5 versions'
                    }), // add vendor prefixes
                    require('cssnano')() // minify the result
                ]
            },
            dist: {
                src: 'dist/css/global.css',
                dest: 'dist/css/global.min.css'
            }
        },

        copy: {
            main: {
                files: [{
                    expand: true,
                    cwd: 'src/img/raw/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'src/img/store/'
                }, ],
            },
        },

        clean: {
            main: {
                src: ['src/img/raw/*', '!src/img/raw/donotdelete.jpg'],
            }
        },

        watch: {
            options: {
                livereload: true,
            },

            scripts: {
                files: ['src/js/*.js', 'src/js/libs/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            },

            css: {
                files: ['src/scss/**'],
                tasks: ['sass', 'postcss'],
                options: {
                    spawn: false
                }
            },

            php: {
                files: ['dist/**/*.php'],
                options: {
                    spawn: false
                }
            },

            images: {
                files: ['src/img', 'src/img/raw/**/*.{png,jpg,gif}'],
                tasks: ['imagemin', 'copy', 'clean'],
                options: {
                    spawn: false,
                },
            }
        },


    });



    grunt.registerTask('default', ['sass', 'concat', 'uglify', 'postcss', 'imagemin', 'copy', 'clean', 'watch']);
    grunt.registerTask('perf', ['wpt', 'perfbudget']);
    grunt.registerTask('lang', ['makepot', 'addtextdomain']);


};
