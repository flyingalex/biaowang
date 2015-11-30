
util = require './../components/util.coffee'
advert = require './../components/advert/advert.coffee'
pagination = require './../components/pagination/pagination.coffee'

_section_column_left = null
_section_column_right = null
_section_item_template_compiled = null

# 获取分页数据成功回调函数
pagination_success_callback = ( response )->

    # 奇偶索引的数据分割成两个数组
    _data_partition = _.partition response.data, ( value, key )->
        return key % 2 == 0

    if _section_column_left.children().length <= _section_column_right.children().length

        util.render_helper( _section_column_left, _data_partition[0], _section_item_template_compiled )
        util.render_helper( _section_column_right, _data_partition[1], _section_item_template_compiled )

    else

        util.render_helper( _section_column_right, _data_partition[0], _section_item_template_compiled )
        util.render_helper( _section_column_left, _data_partition[1], _section_item_template_compiled )

# 缓存dom元素
# 编译模板
init = ()->
    _section_column_left = $ '.section-left-column'
    _section_column_right = $ '.section-right-column'
    _section_item_template_compiled = _.template $( '#section-item-template' ).text()

$ ()->

    # 初始化
    init()
    
    # 初始化广告组件
    advert.init()

    # 初始化分页组件
    pagination.init()

    # 设置获取分页数据成功回调函数
    pagination.set_success_callback pagination_success_callback