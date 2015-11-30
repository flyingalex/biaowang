
util = require './../components/util.coffee'
news = require './../components/news/news.coffee'
advert = require './../components/advert/advert.coffee'
pagination = require './../components/pagination/pagination.coffee'

_resource_imgs = null
_activity_imgs = null

_resource_list = null
_resource_template_compiled = null

# 成功获取分页数据的回调函数
pagination_success_callback = ( response )->

    # 先创建节点
    _resource_items = $ _resource_template_compiled { data: response.data }

    # 调整图片尺寸
    util.resize_imgs_onload _resource_items.find '.resource-img'

    # 添加到列表中
    _resource_list.append _resource_items

init = ()->
    _resource_imgs = $ '.resource-img'
    _activity_imgs = $ '.activity-img'

    util.resize_imgs_onload _activity_imgs
    util.resize_imgs_onload _resource_imgs

    _resource_list = $ '#resource-list'
    _resource_template_compiled = _.template $( '#resource-template' ).text()

$ ()->

    # 缓存dom元素
    init()
    
    # 初始化广告组件
    advert.init()

    # 初始化新闻组件
    news.init()

    # 初始化分页组件
    pagination.init()

    # 设置成功获取分页数据的回调函数
    pagination.set_success_callback pagination_success_callback
    