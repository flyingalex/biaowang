
util = require './../components/util.coffee'
wechat = require './../components/wechat.coffee'
news = require './../components/news/news.coffee'
advert = require './../components/advert/advert.coffee'

_resource_imgs = null
_activity_imgs = null

_resource_type_links = null
_resource_type_link_active = null

_resource_list = null

# 切换干货列表
switch_resource_list = ( event )->

    event.preventDefault()

    _this = $ this

    _resource_type_link_active.removeClass 'resource-type-highlight'
    _this.addClass 'resource-type-highlight'
    _resource_type_link_active = _this

    active_resource_type_img _this.find '.resource-type-img'

    _resource_list.hide()

    _resource_list = $ '#resource-list-column-title-' + _this.attr 'column-title-id'

    _resource_list.show()

    if _resource_list.attr( 'first-load' ) is 'false'
        _resource_list.find( '.resource-img' ).each (idx, ele)->
            util.resize_img $ ele
        _resource_list.attr 'first-load', 'true'

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

    _resource_list = $ '.resource-list-active'

$ ()->

    # 缓存dom元素
    init()

    # 初始化微信组件信息
    # wechat.share()

    # 初始化广告组件
    advert.init()

    # 初始化新闻组件
    news.init()

