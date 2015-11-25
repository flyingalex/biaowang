
$ ()->

    $( '.edit-area-row' ).on 'click', '.operation-btn', ( event )->
        _this = $ this

        _post_info_element = _this.parent().siblings( '.operation-id' )

        if _this.attr( 'method' ) is 'POST'

            event.preventDefault()

            $.post _this.attr( 'action' ), _post_info_element.serialize(), ( response )->

                response = $.parseJSON response

                if response.errCode is '0'

                    _success_message = _this.attr 'success-message' || '操作成功'
                    alert _success_message

                    _success_action = _this.attr 'success-action'

                    if _success_action is 'delete'
                        _this.parents( '.edit-area-row' ).remove()
                    else if _success_action is 'refresh'
                        window.location.reload();
                else
                    alert response.message

    $( '#form-target' ).load ()->
        _this = $ this
        _response =  $.parseJSON _this.contents().find("html").text()
        
        if _response.errCode is '0'
            
            alert '操作成功'

            _redirect_url = _this.attr 'redirect-url'

            if typeof _redirect_url isnt typeof undefined and _redirect_url isnt false
                window.location.href = _redirect_url
            else
                window.location.reload();
        else
            alert _response.message

    $('.operation-add-blue-btn').on 'click', ( event )->

        _this = $ this

        $.post _this.attr( 'action' ), _this.parent().siblings( '.edit-area-input' ).serialize(), ( response )->

            response = $.parseJSON response

            if response.errCode is '0'
                alert '添加成功'
                window.location.reload()
            else
                alert response.message

    $('.operation-edit-blue-btn').on 'click', ( event )->

        $(this).parent().siblings( '.edit-area-input' ).prop 'readonly', ( i, val )->
            return !val

    $('.operation-delete-blue-btn').on 'click', ( event )->

        _this = $ this

        $.post _this.attr( 'action' ), _this.parent().siblings( '.operation-id' ).serialize(), ( response )->
            
            response = $.parseJSON response

            if response.errCode is '0'
                alert '删除成功'
                _this.parents( '.edit-area-row' ).remove()
            else
                alert response.message

    $('.operation-modify-blue-btn').on 'click', ( event )->

        _this = $ this
        _edit_area_input = _this.parent().siblings( '.edit-area-input' )

        if !_edit_area_input.prop 'readonly'
            
            $.post _this.attr( 'action' ),{
                news_id: _this.parent().siblings( '.operation-id' ).val()
                content: _edit_area_input.val()
            }, ( response )->

                response = $.parseJSON response

                if response.errCode is '0'
                    alert '修改成功'
                    _edit_area_input.prop 'readonly', true
                else
                    alert response.message