
util = require './../components/util.coffee'
wechat = require './../components/wechat.coffee'
advert = require './../components/advert/advert.coffee'
navigation = require './../components/navigation/navigation.coffee'

_content_list = null
_content_list_left = null
_content_list_right = null

# 缓存dom元素
# 编译模板
init = ()->

    _content_list = $ '#content-list'
    _content_list_left = $ '#content-list-left'
    _content_list_right = $ '#content-list-right'

show_content_event = ( event )->

    _this = $ this
    _content = _this.siblings '.vote-info-item-content'

    # 按钮动画
    _this.css 'transform', 'rotate( 90deg )'
    _this.css 'transition', '0.3s'
    _this.addClass 'vote-content-btn-hide'
    _this.removeClass 'vote-content-btn-show'
    _this.removeClass 'vote-content-btn-init'

    _content.removeClass 'vote-info-intro-content-init'
    _content.animate {
        height: '100%'
        overflow: 'auto'
    }, 300

hide_content_event = ( event )->

    _this = $ this
    _content = _this.siblings '.vote-info-item-content'

    _this.css 'transform', 'rotate( 0deg )'
    _this.css 'transition', '0.3s'
    _this.addClass 'vote-content-btn-show'
    _this.removeClass 'vote-content-btn-hide'

    _content.animate {
        height: _content.css 'line-height'
        overflow: 'hidden'
    }, 100

vote_action_handler = ( event )->

    _this = $ this

    $.post _this.attr( 'action' ), _this.siblings( '.action-parameter' ).serialize(), ( response )->

        if response.errCode is '0'
            _this.parent().siblings( '.section-column-info-item' ).find( '.vote-num' ).text( response.vote_number )
            alert _this.attr 'success-message'
         else
            alert response.message
    , 'json'
 
$ ()->

    # 缓存dom元素
    # 编译模板
    init()

    # 初始化微信组件信息
    # wechat.share()

    # 初始化广告组件
    advert.init()

    # 初始化底部导航栏
    navigation.init()

    # 投票按钮点击事件
    _content_list.on 'click', '.section-column-btn', vote_action_handler

    # 活动介绍内容显示/折叠效果
    $( '.vote-info-item' ).on 'click', '.vote-content-btn-init', show_content_event

    $( '.vote-info-item' ).on 'click', '.vote-content-btn-show', show_content_event

    $( '.vote-info-item' ).on 'click', '.vote-content-btn-hide', hide_content_event
