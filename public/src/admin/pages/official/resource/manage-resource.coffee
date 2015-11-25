
$ ()->

    _operation_select = $ '.operation-select'

    _operation_select.change ( event )->
        window.location.href = this.value
