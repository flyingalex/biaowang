
_fade_speed = 500

_document = null
_main_container = null
_album_thumbs_imgs = null
_album_normal_imgs = null
_album_thumbs_container = null
_album_normal_container = null
_album_thumbs_slider = null
_album_norml_slider = null
_album_full_screen_btn = null
_album_full_screen_btn_container = null

# 缓存dom元素
init = ()->

    _document               = $ document
    _main_container         = $ '.main'
    _album_thumbs_imgs      = $ '.album-thumbs-img'
    _album_normal_imgs      = $ '.album-normal-img'
    _album_thumbs_container = $ '.album-thumbs-container'
    _album_normal_container = $ '.album-normal-container'
    _album_full_screen_btn  = $ '.album-fullscreen-play-btn'
    _album_full_screen_btn_container = $ '.album-fullscreen-play-btn-container'

# 初始化滑动以及播放效果
init_slider = ()->

    _album_thumbs_slider = new Swiper '.album-thumbs-container', {
        slidesPerView: 5
        spaceBetween: 10
        centeredSlides: true
        slidesPerView: 'auto'
    }

    _album_norml_slider = new Swiper '.album-normal-container', {
        spaceBetween: 15
        autoplay: 3000
        autoplayDisableOnInteraction: false
    }

    _album_norml_slider.stopAutoplay()
    _album_norml_slider.params.control = _album_thumbs_slider
    _album_thumbs_slider.params.control = _album_norml_slider

# 动态调整图片高度
# 1. 高度大于宽度的图片在水平方向上对齐，同时保持原图片比例
# 2. 调整图片尺寸后，根据调整后图片的溢出方向，在对应方向中居中
#    使图片中间部分能够展现
adjust_thumbs_size = ()->
    _album_thumbs_imgs.one 'load', ()->
        _this = $ this

        if _this.width() > _this.height()
            _this.height '100%'
            _this.css 'left', - ( _this.width() - _this.parent().width() ) / 2
        else
            _this.width '100%'
            _this.css 'top', - ( _this.height() - _this.parent().height() ) / 2
    .each ()->
        if this.complete
            $(this).load()

# 全屏函数
active_full_screen = ( event, callback ) ->

    # 先隐藏中间图片
    _main_container.hide()
    _main_container.addClass 'fullscreen'

    # Action 1: fadeOut顶部缩略图
    _fadeout_thumbs_container_action = _album_thumbs_container.fadeOut _fade_speed

    # Action 2: fadeOut底部按钮
    _fadeout_fullscreen_btn_container_action = _album_full_screen_btn_container.fadeOut _fade_speed

    # 监听 action 1, 2，
    # 所有动作结束后开始自动播放，并调用自定义回调函数
    $.when _fadeout_thumbs_container_action, _fadeout_fullscreen_btn_container_action
    
    .done ()->

        # 顶部缩略图和底部按钮全部隐藏后再显示幻灯片，并进行自动播放
        _main_container.fadeIn _fade_speed, ()->

            _album_norml_slider.startAutoplay()

            callback()

    # 停止事件冒泡
    event.stopPropagation()

# 取消全屏函数
cancel_full_screen = ( event, callback )->

    # 停止自动播放效果
    _album_norml_slider.stopAutoplay()

    # 先隐藏幻灯片
    _main_container.hide()
    _main_container.removeClass 'fullscreen'

    # fadein中间图片
    _fadein_main_container_action = _main_container.fadeIn _fade_speed

    # fadein顶部缩略图
    _fadein_thumbs_container_action = _album_thumbs_container.fadeIn _fade_speed

    # fadein底部按钮
    _fadein_fullscreen_btn_container_action = _album_full_screen_btn_container.fadeIn _fade_speed

    # 以上所有动作结束后调用回调函数
    $.when _fadein_main_container_action, _fadein_thumbs_container_action, _fadein_fullscreen_btn_container_action

    .done ()->

        callback()

    # 停止事件冒泡
    event.stopPropagation()

# 全屏函数的回调函数
active_full_screen_callback = ()->

    bind_fullscreen_click_event()

# 取消全屏的回调函数
cancel_full_screen_callback = ()->

    bind_img_click_event()

# 调用全屏函数
fullscreen_caller = ( event )->

    # 先解绑图片点击事件，防止动作执行时重复触发
    unbind_img_click_event()

    active_full_screen event, active_full_screen_callback

# 调用取消全屏函数
fullscreen_click_event = ( event )->

    # 先解绑全屏点击事件，防止动作执行时重复触发
    unbind_fullscreen_click_event()

    cancel_full_screen event, cancel_full_screen_callback

# 为底部按钮绑定点击事件
bind_play_btn_click_event = ()->

    _album_full_screen_btn.on 'click', fullscreen_caller

# 为图片元素绑定点击事件
bind_img_click_event = ()->

    _album_normal_imgs.on 'click', fullscreen_caller

# 为图片元素取消点击事件
unbind_img_click_event = ()->

    _album_normal_imgs.off 'click'

# 绑定全局点击事件
bind_fullscreen_click_event = ()->

    _document.on 'click', '.fullscreen', fullscreen_click_event

# 取消全局绑定事件
unbind_fullscreen_click_event = ()->

    _document.off 'click', '.fullscreen'

$ ()->

    # 初始化dom元素
    init()

    # 初始化图片滑动已经播放效果
    init_slider()

    # 初始化图片点击事件
    bind_img_click_event()

    # 初始化底部播放按钮点击事件
    bind_play_btn_click_event()

    # 调整顶部略缩图比例
    adjust_thumbs_size()
