
util = require './../components/util.coffee'
advert = require './../components/advert/advert.coffee'
pagination = require './../components/pagination/pagination.coffee'
navigation = require './../components/navigation/navigation.coffee'

_content_list = null
_content_list_left = null
_content_list_right = null
_content_template_compiled = null

# 获取分页数据成功回调函数
pagination_success_callback = ( response )->

    # 奇偶索引的数据分割成两个数组
    _data_partition = _.partition response.data, ( value, key )->
        return key % 2 == 0

    if _content_list_left.children().length <= _content_list_right.children().length

        util.render_helper( _content_list_left, _data_partition[0], _content_template_compiled )
        util.render_helper( _content_list_right, _data_partition[1], _content_template_compiled )

    else

        util.render_helper( _content_list_right, _data_partition[0], _content_template_compiled )
        util.render_helper( _content_list_left, _data_partition[1], _content_template_compiled )

# 缓存dom元素
# 编译模板
init = ()->

    _content_list = $ '#content-list'
    _content_list_left = $ '#content-list-left'
    _content_list_right = $ '#content-list-right'
    _content_template_compiled = _.template $( '#content-template' ).text()

$ ()->

    # 缓存dom元素
    # 编译模板
    init()

    # 初始化广告组件
    advert.init()

    # 初始化底部导航栏
    navigation.init()

    # 初始化分页组件
    pagination.init()

    # 设置获取分页数据成功回调函数
    pagination.set_success_callback pagination_success_callback

    # 投票按钮点击事件
    _content_list.on 'click', '.section-column-btn', ( event )->

        _this = $ this

        $.post _this.attr( 'action' ), _this.siblings( '.action-parameter' ).serialize(), ( response )->

            if response.errCode is '0'
                _this.parent().siblings( '.section-column-info-item' ).find( '.vote-num' ).text( response.vote_number )
                alert _this.attr 'success-message'
            else
                alert response.message
        , 'json'

    # 活动介绍内容显示/折叠效果
    $( '.vote-intro-content-display-btn' ).on 'click',( event )->

        _this = $ this

        _this.toggleClass 'vote-content-btn-close'
        _this.siblings( '.vote-info-item-content' ).toggleClass( 'vote-info-intro-content-init' )
