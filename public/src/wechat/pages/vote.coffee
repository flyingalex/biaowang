
$ ()->
    $('.section-column-btn').on 'click', ( event )->

        _this = $ this

        $.post _this.attr( 'action' ), _this.siblings( '.action-parameter' ).serialize(), ( response )->

            response = $.parseJSON response

            if response.errCode is '0'
                _this.parent().siblings( '.section-column-info-item' ).find( '.vote-num' ).text( response.vote_number )
                alert _this.attr 'success-message'
            else
                alert response.message

    $( '.vote-intro-content-display-btn' ).on 'click',( event )->

        _this = $ this

        _this.siblings( '.vote-info-item-content' ).removeClass( 'vote-info-intro-content-init' )
        _this.remove()