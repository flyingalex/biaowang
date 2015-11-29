
util = require './../components/util.coffee'
news = require './../components/news/news.coffee'
advert = require './../components/advert/advert.coffee'
pagination = require './../components/pagination/pagination.coffee'

_resource_imgs = null
_activity_imgs = null

init = ()->
    _resource_imgs = $ '.resource-img'
    _activity_imgs = $ '.activity-img'

    util.resize_imgs_onload _activity_imgs
    util.resize_imgs_onload _resource_imgs

resource_list_load_change_event_handler = ( event )->

    _resource_imgs = $ '.resource-img'
    util.resize_imgs_onload _resource_imgs

bind_resource_img_added_event = ()->

    $(document).on 'DOMNodeInserted', resource_list_load_change_event_handler

$ ()->

    # 缓存dom元素
    init()
    
    # 初始化广告组件
    advert.init()

    # 初始化新闻组件
    news.init()

    # 初始化分页组件
    pagination.init()

    # 绑定图片元素添加事件，
    # 使图片新添时可以调整尺寸
    bind_resource_img_added_event()