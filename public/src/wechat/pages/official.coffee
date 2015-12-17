
util = require './../components/util.coffee'
news = require './../components/news/news.coffee'
advert = require './../components/advert/advert.coffee'
pagination = require './../components/pagination/pagination.coffee'

_resource_imgs = null
_activity_imgs = null

_resource_type_links = null
_resource_type_link_active = null

_resource_list = null
_resource_template_compiled = null

_pagination = null
_pagination_parameter_next_page = null
_pagination_parameter_column_title_id = null

_processable = true

# 预处理函数
preprocessor = ()->

    return _processable

# # 到达最后一页回调函数
on_reach_last_page = ()->

    _resource_type = $ '#resource-type-' + _resource_list.attr 'column-title-id'
    _resource_type.attr 'reach-last-page', 'true'

    _processable = false
    _pagination.text _pagination.attr 'data-empty-text'

# 成功获取分页数据的回调函数
pagination_success_callback = ( response )->

    # 先创建节点
    _resource_items = $ _resource_template_compiled {
        data: response.data
    }

    # 添加到列表中
    _resource_list.append _resource_items

     # 调整图片尺寸
    util.resize_imgs_onload _resource_items.find '.resource-img'

# 切换干货列表
switch_resource_list = ( event )->

    event.preventDefault()

    _this = $ this

    _resource_type_link_active.removeClass 'resource-type-highlight'
    _this.addClass 'resource-type-highlight'
    _resource_type_link_active = _this

    if _this.attr( 'reach-last-page' ) is 'true'
        _processable = false
        _pagination.text _pagination.attr 'data-empty-text'
    else
        _processable = true
        _pagination.text _pagination.attr 'data-loaded-text'

    active_resource_type_img _this.find '.resource-type-img'

    _resource_list.hide()

    _resource_list = $ '#resource-list-column-title-' + _this.attr 'column-title-id'

    _resource_list.show()

    if _resource_list.attr( 'first-load' ) is 'false'
        _resource_list.find( '.resource-img' ).each (idx, ele)->
            util.resize_img $ ele
        _resource_list.attr 'first-load', 'true'

    _pagination_parameter_next_page.val _this.attr 'next-page'
    _pagination_parameter_column_title_id.val _this.attr 'column-title-id'

active_resource_type_img = ( _current_type_img )->
    
    _current_type_img.prop 'src', _current_type_img.attr 'active-src'

init = ()->

    _activity_imgs = $ '.activity-img'
    _resource_imgs = $ '.resource-list-active .resource-img'

    util.resize_imgs_onload _resource_imgs
    util.resize_imgs_onload _activity_imgs

    _resource_type_links = $ '.resource-type-link'
    _resource_type_links.on 'click', switch_resource_list
    _resource_type_link_active = $ '.resource-type-highlight'

    console.log _resource_type_link_active

    _pagination = $ '.pagination'
    _pagination_parameter_next_page = $ '#pagination-next-page'
    _pagination_parameter_column_title_id = $ '#pagination-parameter-column_title_id'

    _resource_list = $ '.resource-list-active'
    _resource_template_compiled = _.template $( '#resource-template' ).text()

    _current_column = _pagination_parameter_column_title_id.val()

$ ()->

    # 缓存dom元素
    init()

    # 初始化广告组件
    advert.init()

    # 初始化新闻组件
    news.init()

    # 初始化分页组件
    pagination.init()

    # 设置预处理函数
    pagination.set_preprocessor preprocessor

    # 设置成功获取分页数据的回调函数
    pagination.set_success_callback pagination_success_callback

    # # 设置到达最后一页回调函数
    pagination.set_on_reach_last_page_handler on_reach_last_page
    
