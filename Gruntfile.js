module.exports = function(grunt) {
    // Load all grunt tasks matching the `grunt-*` pattern.
    require('load-grunt-tasks')(grunt);

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

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

        less: {
            development: {
                options: {
                    paths : ["assets/css"]
                },
                files: {
                    "css/<%= pkg.name %>.css": "less/index.less"
                }
            }
        },

        watch: {
            scripts: {
                files: [
                    'libs/common/less/**/*.less',
                    'libs/common/js/**/*.js',
                    'libs/application/less/**/*.less',
                    'libs/application/js/**/*.js',
                    'less/**/*.less'
                ],
                tasks: ['grunt:common_dev', 'grunt:application_dev', 'less'],
                options: {
                    spawn: false
                }
            }
        }
    });

    // Default task(s).
    grunt.registerTask('default', ['grunt:common', 'grunt:application', 'less']);

};