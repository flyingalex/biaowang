
_pagination = null
_pagination_next_page = null
_pagination_action_url = null
_pagination_action_list = null
_pagination_action_template = null
_pagination_action_template_compiled = null
_pagination_action_parameters_form = null

_pagination_success_callback = null
_pagination_fail_callback = null

# 获取分页数据的回调函数
get_pagination_data_callback = ( response )->

    if parseInt( response.errCode ) is 0

        if response.total_page <= parseInt _pagination_next_page.val()
            _pagination.off 'click'
            _pagination.text _pagination.attr 'data-empty-text'
        else
            _pagination.text _pagination.attr 'data-loaded-text'

        if response.data.length
            _pagination_next_page.val parseInt( _pagination_next_page.val() ) + 1
            _pagination_success_callback response
    else
        _pagination_fail_callback response

# 获取分页
get_pagination_data = ( event )->

    $.getJSON _pagination_action_url, _pagination_action_parameters_form.serialize(), get_pagination_data_callback

# 初始化默认成功获取分页数据的回调函数
init_default_success_callback = ()->

    _pagination_success_callback = _pagination_success_callback ? default_success_callback
    _pagination_action_list = $ $( '#pagination-info-list-id' ).val()
    _pagination_action_template = $( $( '#pagination-info-template-id' ).val() ).text()
    _pagination_action_template_compiled = _.template _pagination_action_template

# 默认成功获取分页数据的回调函数
default_success_callback = ( response )->

    _pagination_action_list.append _pagination_action_template_compiled { data: response.data }

# 初始化默认失败函数
init_default_fail_callback = ()->

    _pagination_fail_callback = _pagination_fail_callback ? default_fail_callback

# 默认失败函数
default_fail_callback = ( response )->

    if 'message' in response
        alert response.message
        console.log response.message

# 设置分页获取数据的成功回调函数
set_success_callback = ( success_callback )->

    _pagination_success_callback = success_callback

# 设置分页获取数据的失败回调函数
set_fail_callabck = ( fail_callback )->

    _pagination_fail_callback = fail_callback

init = ()->

    _pagination = $ '.pagination'

    _pagination_next_page = $ '#pagination-next-page'
    _pagination_action_url = $( '#pagination-info-url' ).val()
    _pagination_action_parameters_form = $ '#pagination-action-parameters'

    _pagination.on 'click', get_pagination_data

    init_default_success_callback()
    init_default_fail_callback()

module.exports =

    init: init

    set_success_callback: set_success_callback

    set_fail_callabck: set_fail_callabck