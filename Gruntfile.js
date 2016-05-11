module.exports = function(grunt) {
    // Load all grunt tasks matching the `grunt-*` pattern.
    require('load-grunt-tasks')(grunt);
    // Display how match time it took to build each task
    require('time-grunt')(grunt);
    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        banner : '/*! ************ <%= pkg.name %> v<%= pkg.version %> ************ */\n',

        paths : {
            components : 'libs',
            src : 'docs/src',
            build : 'docs/build',
            temp : 'temp'
        },

        packages : {
            application : grunt.file.readJSON('libs/application/package.json'),
            common : grunt.file.readJSON('libs/common/package.json')
        },

        components : {
            application : {
                path : '<%= paths.components %>/application',
                styles : [
                    '<%= components.application.path %>/build/less/<%= packages.application.name %>.less'
                ],
                scripts : [
                    '<%= components.application.path %>/build/js/<%= packages.application.name %>.js'
                ],
                images : [
                    '<%= components.application.path %>/build/img'
                ],
                fonts : [
                    '<%= components.application.path %>/build/fonts'
                ]
            },
            common : {
                path : '<%= paths.components %>/common',
                styles : [
                    '<%= components.common.path %>/build/less/<%= packages.common.name %>.less'
                ],
                scripts : [
                    '<%= components.common.path %>/build/js/<%= packages.common.name %>.js'
                ],
                images : [
                    '<%= components.common.path %>/build/img'
                ],
                fonts : [
                    '<%= components.common.path %>/build/fonts'
                ]
            }
        },

        grunt : {
            common : {
                gruntfile : '<%= components.common.path %>/Gruntfile.js'
            },
            common_watch : {
                gruntfile : '<%= components.common.path %>/Gruntfile.js',
                tasks : ['watch']
            },
            common_optimize : {
                gruntfile : '<%= components.common.path %>/Gruntfile.js',
                tasks : ['optimize']
            },
            application : {
                gruntfile: '<%= components.application.path %>/Gruntfile.js'
            },
            application_watch : {
                gruntfile : '<%= components.application.path %>/Gruntfile.js',
                tasks : ['watch']
            },
            application_optimize : {
                gruntfile : '<%= components.application.path %>/Gruntfile.js',
                tasks : ['optimize']
            }
        },

        clean : {
            scripts : [
                '<%= paths.build %>/js/*'
            ],
            styles : [
                '<%= paths.build %>/less/*',
                '<%= paths.build %>/css/*'
            ],
            images : [
                '<%= paths.build %>/img/*'
            ],
            fonts : [
                '<%= paths.build %>/fonts/*'
            ],
            stuff : [
                '<%= paths.build %>/content/*',
                '<%= paths.build %>/stuff/*'
            ],
            temp : [
                '<%= paths.temp %>'
            ]
        },

        concat : {
            scripts : {
                options: {
                    banner: '<%= banner %>'
                },
                src : [
                    '<%= components.common.scripts %>',
                    '<%= components.application.scripts %>',
                    '<%= paths.build %>/js/<%= pkg.name %>.variables.js',
                    '<%= paths.src %>/js/**/*.js'
                ],
                dest : '<%= paths.build %>/js/<%= pkg.name %>.js'
            },
            styles : {
                options: {
                    banner: '<%= banner %>'
                },
                src : [
                    '<%= components.common.styles %>',
                    '<%= components.application.styles %>',
                    '<%= paths.src %>/less/variables/*.less',
                    '<%= paths.src %>/less/main.less',
                    '<%= paths.src %>/less/docs.less'
                ],
                dest : '<%= paths.build %>/less/<%= pkg.name %>.less'
            },
            variables : {
                src : [
                    '<%= components.common.path %>/build/less/<%= packages.common.name %>.variables.less',
                    '<%= components.application.path %>/build/less/<%= packages.application.name %>.variables.less',
                    '<%= paths.src %>/less/variables/*.less'
                ],
                dest : '<%= paths.build %>/less/<%= pkg.name %>.variables.less'
            }
        },

        lessvars: {
            options: {
                format : function(vars){
                    return 'window.LESS = cm.merge(window.LESS, '+ JSON.stringify(vars) +');';
                }
            },
            build : {
                src : ['<%= paths.build %>/less/<%= pkg.name %>.variables.less'],
                dest : '<%= paths.build %>/js/<%= pkg.name %>.variables.js'
            }
        },

        less: {
            build : {
                src : ['<%= paths.build %>/less/<%= pkg.name %>.less'],
                dest : '<%= paths.build %>/css/<%= pkg.name %>.css'
            }
        },

        copy: {
            images : {
                files : [{
                    expand : true,
                    cwd : '<%= components.common.images %>/',
                    src : ['**/*.*'],
                    dest : '<%= paths.build %>/img/<%= packages.common.name %>/'
                },{
                    expand : true,
                    cwd : '<%= components.application.images %>/',
                    src : ['**/*.*'],
                    dest : '<%= paths.build %>/img/<%= packages.application.name %>/'
                },{
                    expand : true,
                    cwd : '<%= paths.src %>/img/',
                    src : ['**/*.*'],
                    dest : '<%= paths.build %>/img/'
                }]
            },
            fonts : {
                files: [{
                    expand : true,
                    cwd : '<%= components.common.fonts %>/',
                    src : ['**/*.*'],
                    dest : '<%= paths.build %>/fonts/<%= packages.common.name %>/'
                },{
                    expand : true,
                    cwd : '<%= components.application.fonts %>/',
                    src : ['**/*.*'],
                    dest : '<%= paths.build %>/fonts/<%= packages.application.name %>/'
                },{
                    expand : true,
                    cwd : '<%= paths.src %>/fonts/',
                    src : ['**/*.*'],
                    dest : '<%= paths.build %>/fonts/'
                }]
            },
            stuff : {
                files : [{
                    expand: true,
                    cwd: '<%= paths.src %>/',
                    src: ['*.*'],
                    dest: '<%= paths.build %>/'
                },{
                    expand: true,
                    cwd: '<%= paths.src %>/content/',
                    src: ['**/*.*'],
                    dest: '<%= paths.build %>/content/'
                },{
                    expand: true,
                    cwd: '<%= paths.src %>/stuff/',
                    src: ['**/*.*'],
                    dest: '<%= paths.build %>/stuff/'
                }]
            }
        },

        watch : {
            scripts : {
                files : [
                    '<%= components.common.scripts %>',
                    '<%= components.application.scripts %>',
                    '<%= paths.src %>/js/**/*.js'
                ],
                tasks : ['scripts']
            },
            styles : {
                files : [
                    '<%= components.common.styles %>',
                    '<%= components.application.styles %>',
                    '<%= paths.src %>/less/**/*.less'
                ],
                tasks : ['styles']
            },
            images : {
                files : [
                    '<%= components.common.images %>/**/*.*',
                    '<%= components.application.images %>/**/*.*',
                    '<%= paths.src %>/img/**/*.*'
                ],
                tasks : ['images']
            },
            fonts : {
                files : [
                    '<%= components.common.fonts %>/**/*.*',
                    '<%= components.application.fonts %>/**/*.*',
                    '<%= paths.src %>/fonts/**/*.*',
                    '!<%= paths.src %>/fonts/**/*.json'
                ],
                tasks : ['fonts']
            },
            stuff : {
                files : [
                    '<%= paths.src %>/*.*',
                    '<%= paths.src %>/content/**/*.*',
                    '<%= paths.src %>/stuff/**/*.*'
                ],
                tasks : ['stuff']
            }
        },

        concurrent : {
            target : {
                options: {
                    logConcurrentOutput : true
                },
                tasks : ['grunt:common_watch', 'grunt:application_watch', 'watch']
            }
        }
    });
    // Custom Tasks
    grunt.registerTask('default', ['clean', 'pre', 'scripts', 'styles', 'images', 'fonts', 'stuff']);
    grunt.registerTask('optimize', ['grunt:common_optimize', 'grunt:application_optimize', 'default']);
    grunt.registerTask('watcher', ['concurrent']);

    grunt.registerTask('scripts', ['concat:scripts']);
    grunt.registerTask('styles', ['variables', 'concat:styles', 'less:build']);
    grunt.registerTask('images', ['copy:images']);
    grunt.registerTask('fonts', ['copy:fonts']);
    grunt.registerTask('stuff', ['copy:stuff']);
    grunt.registerTask('variables', ['concat:variables', 'lessvars']);
    grunt.registerTask('pre', ['variables']);
};