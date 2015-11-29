
_load_btn = null
_load_btn_next_page = null
_load_btn_action_url = null
_load_btn_action_list = null
_load_btn_action_template = null
_load_btn_action_template_compiled = null
_load_btn_action_parameters_form = null

get_data_callback = ( response )->

    if response.errCode is 0

        if response.total_page <= parseInt _load_btn_next_page.val()
            _load_btn.off 'click'
            _load_btn.text _load_btn.attr 'data-empty-text'
        else
            _load_btn.text _load_btn.attr 'data-loaded-text'

        if response.data.length
            _load_btn_next_page.val parseInt( _load_btn_next_page.val() ) + 1
            _load_btn_action_list.append _load_btn_action_template_compiled { data: response.data }
    else
        console.log response.message

process_load_btn_action = ( event )->

    $.get _load_btn_action_url, _load_btn_action_parameters_form.serialize(), get_data_callback, 'json'

init = ()->

    _load_btn = $ '.load-btn'

    if _load_btn.length
        _load_btn_next_page = $ '#load-btn-next-page' 
        _load_btn_action_url = $( '#load-btn-info-url' ).val()
        _load_btn_action_list = $ $( '#load-btn-info-list-id' ).val()
        _load_btn_action_parameters_form = $ '#load-btn-action-parameters'
        _load_btn_action_template = $( $( '#load-btn-info-template-id' ).val() ).text()
        _load_btn_action_template_compiled = _.template _load_btn_action_template

        _load_btn.on 'click', process_load_btn_action

$ ()->

    init()