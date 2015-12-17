
util = require './../components/util.coffee'

photo_effect = require './photo-effect.coffee'
photo_renderer = require './photo-render.coffee'

$ ()->
    
    photo_renderer.render photo_effect.init

