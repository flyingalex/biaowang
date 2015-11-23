module.exports = (grunt)->

    stringify = require 'stringify'
    coffeeify = require 'coffeeify'

    grunt.initConfig
        concurrent:
            dev:
                tasks: ["nodemon", "watch"]
                options:
                    logConcurrentOutput: true

        clean:
            dist: ['dist']

        browserify:
            admin_pages:
                options:
                  preBundleCB: (b)->
                    b.transform(coffeeify)
                    b.transform(stringify({extensions: ['.hbs', '.html', '.tpl', '.txt']}))
                expand: true
                flatten: true
                src: ['src/admin/pages/**/*.coffee']
                dest: 'dist/admin/js/pages/'
                ext: '.js'

            admin_components:
                options:
                  preBundleCB: (b)->
                    b.transform(coffeeify)
                    b.transform(stringify({extensions: ['.hbs', '.html', '.tpl', '.txt']}))
                expand: true
                flatten: true
                files: {
                    'dist/admin/js/component.js': [
                        'src/admin/components/sidebar/sidebar.coffee'
                    ]
                }

        watch:
            compile:
                options:
                    livereload: 1337
                files: ['src/**/*.less', 'src/**/*.coffee']
                tasks: ['browserify', 'less']

        less:
            admin:
                files:
                    'dist/admin/css/common.css': [ 
                        'src/common/reset.less'
                        'src/admin/common/common.less'
                    ]
                    'dist/admin/css/common/edit-area-table.css':[
                        'src/admin/components/edit-area/common.less',
                        'src/admin/components/edit-area/table/table.less'
                    ]
                    'dist/admin/css/common/edit-area-list.css':[
                        'src/admin/components/edit-area/common.less',
                        'src/admin/components/edit-area/list/list.less'
                    ]
                    'dist/admin/css/component.css':[
                        'src/admin/components/header/header.less'
                        'src/admin/components/sidebar/sidebar.less'
                        'src/admin/components/content/content.less'
                    ]
                    'dist/admin/css/pages/login.css': ['src/admin/pages/login/login.less']

    grunt.loadNpmTasks 'grunt-browserify'
    grunt.loadNpmTasks 'grunt-contrib-less'
    grunt.loadNpmTasks 'grunt-contrib-clean'
    grunt.loadNpmTasks 'grunt-contrib-watch'
    grunt.loadNpmTasks 'grunt-contrib-uglify'
    grunt.loadNpmTasks 'grunt-contrib-cssmin'
    grunt.loadNpmTasks 'grunt-contrib-less'

    grunt.registerTask 'default', ->
        grunt.task.run [
            'clean'
            'browserify'
            'less'
            'watch'
        ]

    grunt.registerTask 'prod', ->
        grunt.task.run [
            'clean'
            'browserify'
            'less'
            'uglify'
            'cssmin'
        ]