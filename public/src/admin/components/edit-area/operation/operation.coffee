
$ ()->

    $('.edit-area-item-operation').on 'click', '.operation-btn', ( event )->
        _this = $ this

        _post_info_element = _this.parent().siblings( '.operation-id' )

        if _this.attr( 'method' ) is 'POST'

            event.preventDefault()

            $.post _this.attr( 'action' ), _post_info_element.serialize(), ( response )->
                if response.errCode is '0'
                    alert '删除成功'
                    _this.parents( '.edit-area-row' ).remove()
                    # $( '#row-' + _post_info_element.val() ).remove()
                else
                    alert response.message