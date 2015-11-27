
$ ()->
    
    $( '.resource-img' ).one 'load', ()->
        _this = $ this

        if _this.width() > _this.height()
            # _this.parent().width ( _this.parent().height() * _this.width() / _this.height() )
            _this.height _this.parent().height()
        else

            _this.width _this.parent().width()
    .each ()->
        if this.complete
            $(this).load()
