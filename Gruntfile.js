module.exports = function(grunt) {
    // Load all grunt tasks matching the `grunt-*` pattern.
    require('load-grunt-tasks')(grunt);
    // Display how match time it took to build each task
    require('time-grunt')(grunt);
    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        clean: {
            docs : [
                'docs/build'
            ],
            post : [
                'temp',
                'lib'
            ]
        },

        grunt: {
            common: {
                gruntfile: 'libs/common/Gruntfile.js'
            },
            common_dev: {
                gruntfile: 'libs/common/Gruntfile.js',
                tasks: ['dev']
            },
            application: {
                gruntfile: 'libs/application/Gruntfile.js'
            },
            application_dev: {
                gruntfile: 'libs/application/Gruntfile.js',
                tasks: ['dev']
            }
        },

        concat: {
            build: {
                src: [
                    'libs/common/build/js/MagpieUI.js',
                    'libs/application/build/js/QuickSilk-Application.js',
                    'js/**/*.js',
                    '!js/<%= pkg.name %>.js'
                ],
                dest: 'js/<%= pkg.name %>.js'
            },
            docs: {
                files: [{
                    src: [
                        'libs/common/build/js/MagpieUI.js',
                        'libs/application/build/js/QuickSilk-Application.js',
                        'docs/src/js/**/*.js'
                    ],
                    dest: 'docs/build/js/<%= pkg.name %>.js'
                },{
                    src: [
                        'libs/common/build/less/MagpieUI.less',
                        'libs/application/build/less/QuickSilk-Application.less',
                        'docs/src/less/variables.less',
                        'docs/src/less/main.less',
                        'docs/src/less/docs.less'
                    ],
                    dest: 'docs/build/less/<%= pkg.name %>.less'
                }]
            }
        },

        less: {
            build: {
                files: {
                    "css/<%= pkg.name %>.css": "less/index.less"
                }
            },
            docs: {
                src: ['docs/build/less/<%= pkg.name %>.less'],
                dest: 'docs/build/css/<%= pkg.name %>.css'
            }
        },

        copy: {
            docs: {
                files: [{
                    expand: true,
                    cwd: 'docs/src/',
                    src: ['*.*'],
                    dest: 'docs/build/'
                },{
                    expand: true,
                    cwd: 'docs/src/content/',
                    src: ['**/*.*'],
                    dest: 'docs/build/content/'
                },{
                    expand: true,
                    cwd: 'docs/src/stuff/',
                    src: ['**/*.*'],
                    dest: 'docs/build/stuff/'
                },{
                    expand: true,
                    cwd: 'docs/src/img/',
                    src: ['**/*.*'],
                    dest: 'docs/build/img/'
                },{
                    expand: true,
                    cwd: 'libs/common/build/fonts/',
                    src: [
                        '**/*.*',
                        '!**/*.json'
                    ],
                    dest: 'docs/build/fonts/magpieui/'
                },{
                    expand: true,
                    cwd: 'libs/application/build/fonts/',
                    src: [
                        '**/*.*',
                        '!**/*.json'
                    ],
                    dest: 'docs/build/fonts/application/'
                },{
                    expand: true,
                    cwd: 'libs/common/build/img/',
                    src: ['**/*.*'],
                    dest: 'docs/build/img/magpieui'
                },{
                    expand: true,
                    cwd: 'libs/application/build/img/',
                    src: ['**/*.*'],
                    dest: 'docs/build/img/application/'
                }]
            }
        },

        watch: {
            development: {
                files: [
                    'libs/common/src/less/**/*.less',
                    'libs/common/src/js/**/*.js',
                    'libs/application/src/less/**/*.less',
                    'libs/application/src/js/**/*.js',
                    'less/**/*.less'
                ],
                tasks: ['dev'],
                options: {
                    spawn: false
                }
            },
            docs: {
                files: [
                    'docs/src/content/**/*.*',
                    'docs/src/stuff/**/*.*',
                    'libs/common/src/less/**/*.less',
                    'libs/application/src/less/**/*.less',
                    'docs/src/less/**/*.less',
                    'libs/common/src/js/**/*.js',
                    'libs/application/src/js/**/*.js',
                    'docs/src/js/**/*.js'
                ],
                tasks: ['docs'],
                options: {
                    spawn: false
                }
            }
        }
    });

    // Default task(s).
    grunt.registerTask('default', ['clean', 'grunt:common', 'grunt:application', 'concat', 'less', 'copy', 'clean:post']);
    grunt.registerTask('dev', ['grunt:common_dev', 'grunt:application_dev', 'concat:build', 'less:build', 'clean:post']);
    grunt.registerTask('docs', ['grunt:common_dev', 'grunt:application_dev', 'concat:docs', 'less:docs', 'copy:docs', 'clean:post']);
};