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
                        'src/admin/components/imageupload.coffee'
                        'src/admin/components/sidebar/sidebar.coffee'
                        'src/admin/components/content/content.coffee'
                        'src/admin/components/edit-area/common.coffee'
                        'src/admin/components/edit-area/operation/operation.coffee'
                    ]
                }

            wechat:
                options:
                  preBundleCB: (b)->
                    b.transform(coffeeify)
                    b.transform(stringify({extensions: ['.hbs', '.html', '.tpl', '.txt']}))
                expand: true
                flatten: true
                files: {
                    'dist/wechat/js/pages/vote.js': [
                        'src/wechat/pages/vote.coffee'
                    ]
                    'dist/wechat/js/pages/rules.js': [
                        'src/wechat/pages/rules.coffee'
                    ]
                    'dist/wechat/js/pages/photo.js': [
                        'src/wechat/pages/photo.coffee'
                    ]
                    'dist/wechat/js/pages/album.js': [
                        'src/wechat/pages/album.coffee'
                    ]
                    'dist/wechat/js/pages/adward.js': [
                        'src/wechat/pages/adward.coffee'
                    ]
                    'dist/wechat/js/pages/official.js': [
                        'src/wechat/pages/official.coffee'
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
                        'src/admin/components/edit-area/common.less'
                        'src/admin/components/edit-area/edit-table/edit-table.less'
                        'src/admin/components/edit-area/operation/operation.less'
                    ]
                    'dist/admin/css/common/edit-area-list.css':[
                        'src/admin/components/edit-area/common.less'
                        'src/admin/components/edit-area/edit-list/edit-list.less'
                        'src/admin/components/edit-area/operation/operation.less'
                    ]
                    'dist/admin/css/component.css':[
                        'src/admin/components/header/header.less'
                        'src/admin/components/sidebar/sidebar.less'
                        'src/admin/components/content/content.less'
                    ]
                    'dist/admin/css/pages/login.css': ['src/admin/pages/login/login.less']
                    'dist/admin/css/pages/offical/manage-resource.css': ['src/admin/pages/official/resource/manage-resource.less']
            wechat:
                files:
                    'dist/wechat/css/common.css': [
                        'src/wechat/common/common.less'
                        'src/wechat/components/news/news.less'
                        'src/wechat/components/advert/advert.less'
                        'src/wechat/components/header/header.less'
                        'src/wechat/components/section/section.less'
                        'src/wechat/components/navigation/navigation.less'
                    ]
                    'dist/wechat/css/pages/vote.css': ['src/wechat/pages/vote.less']
                    'dist/wechat/css/pages/official.css': ['src/wechat/pages/official.less']
                    'dist/wechat/css/pages/album.css': ['src/wechat/pages/album.less']
                    'dist/wechat/css/pages/photo.css': ['src/wechat/pages/photo.less']

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