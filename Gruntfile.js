'use strict';
module.exports = function(grunt) {

    // load all grunt tasks matching the `grunt-*` pattern
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        // watch for changes and trigger compass, jshint, uglify and livereload
        watch: {
            compass: {
                files: ['assets/scss/**/*.{scss,sass}'],
                tasks: ['compass']
            },
            js: {
                files: '<%= jshint.all %>',
                tasks: ['jshint', 'uglify']
            },
            livereload: {
                options: { livereload: true },
                files: ['style.css', 'assets/js/*.js', '*.html', '*.php', 'assets/images/**/*.{png,jpg,jpeg,gif,webp,svg}']
            }
        },

        // compass and scss
        compass: {
            dist: {
                options: {
                    config: 'config.rb',
                    force: true
                }
            }
        },

        // javascript linting with jshint
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                "force": true
            },
            all: [
                'Gruntfile.js',
                'assets/js/source/**/*.js',
                'assets/js/gumby/**/*.js',
                'assets/js/gumby/libs/**/*.js',
                'assets/js/vendor/gumby-images/*.js'
            ]
        },

        // uglify to concat, minify, and make source maps
        uglify: {
            plugins: {
                options: {
                    sourceMap: 'assets/js/plugins.js.map',
                    sourceMappingURL: 'plugins.js.map',
                    sourceMapPrefix: 2,
                    mangle: false
                },
                files: {
                    'assets/js/plugins.min.js': [
                        'assets/js/gumby/libs/gumby.js',
                        'assets/js/gumby/plugins.js',
                        'assets/js/gumby/libs/ui/gumby.retina.js',
                        'assets/js/gumby/libs/ui/gumby.fixed.js',
                        'assets/js/gumby/libs/ui/gumby.skiplink.js',
                        'assets/js/gumby/libs/ui/gumby.toggleswitch.js',
                        'assets/js/gumby/libs/ui/gumby.checkbox.js',
                        'assets/js/gumby/libs/ui/gumby.radiobtn.js',
                        'assets/js/gumby/libs/ui/gumby.tabs.js',
                        'assets/js/gumby/libs/ui/gumby.navbar.js',
                        'assets/js/gumby/libs/ui/gumby.fittext.js',
                        'assets/js/gumby/libs/ui/jquery.validation.js',
                        'assets/js/vendor/gumby-images/gumby.images.js',
                        'assets/js/gumby/libs/gumby.init.js'
                    ]
                }
            },
            main: {
                options: {
                    sourceMap: 'assets/js/main.js.map',
                    sourceMappingURL: 'main.js.map',
                    sourceMapPrefix: 2,
                    mangle: false
                },
                files: {
                    'assets/js/main.min.js': [
                        'assets/js/source/plugins.js',
                        'assets/js/gumby/main.js',
                        'assets/js/source/main.js',
                    ]
                }
            }
        },

        // image optimization
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 7,
                    progressive: true,
                    pngquant: true,
                    interlaced: true
                },
                files: [{
                    expand: true,
                    cwd: 'assets/images/',
                    src: '**/*',
                    dest: 'assets/images/'
                }]
            }
        },

        // deploy via rsync
        deploy: {
            options: {
                src: "./",
                args: ["--verbose"],
                exclude: ['.git*', 'node_modules', '.sass-cache', 'Gruntfile.js', 'package.json', '.DS_Store', 'README.md', 'config.rb', '.jshintrc'],
                recursive: true,
                syncDestIgnoreExcl: true
            },
            staging: {
                options: {
                    dest: "~/path/to/theme",
                    host: "user@host.com"
                }
            },
            production: {
                options: {
                    dest: "~/path/to/theme",
                    host: "user@host.com"
                }
            }
        }

    });

    // rename tasks
    grunt.renameTask('rsync', 'deploy');

    // register task
    grunt.registerTask('default', ['watch']);

};
