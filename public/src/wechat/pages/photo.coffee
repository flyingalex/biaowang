
$ ()->

    _is_full_screen = false

    _fade_speed = 500

    _main_container = $ '.main'
    _album_thumbs_container = $ '.album-thumbs-container'
    _album_normal_container = $ '.album-normal-container'
    _album_normal_imgs      = $ '.album-normal-img'
    _album_full_screen_btn  = $ '.album-fullscreen-play-btn'
    _album_full_screen_btn_container = $ '.album-fullscreen-play-btn-container'

    # 动态调整图片高度，
    # 使高度大于宽度的图片在水平方向上对齐，同时保持原图片比例
    $( '.album-thumbs-img' ).one 'load', ()->
        _this = $ this

        if _this.width() > _this.height()
            _this.parent().width ( _this.parent().height() * _this.width() / _this.height() )
            _this.height '100%'
        else
            _this.width '100%'
    .each ()->
        if this.complete
            $(this).load()

    albumThumbs = new Swiper '.album-thumbs-container', {
        slidesPerView: 5
        spaceBetween: 10
        centeredSlides: true
        slidesPerView: 'auto'
        # preloadImages: false        # 图片延迟加载
        # lazyLoading: true           # 图片延迟加载
    }

    albumNormal = new Swiper '.album-normal-container', {
        spaceBetween: 15
        autoplay: 3000
        autoplayDisableOnInteraction: false
    }

    albumNormal.stopAutoplay()
    albumNormal.params.control = albumThumbs
    albumThumbs.params.control = albumNormal

    # 全屏调用函数
    invoke_full_screen = ( event, callback ) ->

        if not _is_full_screen

            _is_full_screen = true

            _main_container.addClass 'fullscreen'
            _main_container.hide()
            
            _album_thumbs_container.fadeOut _fade_speed
            _album_full_screen_btn_container.fadeOut _fade_speed, ()->
                _main_container.show()

                albumNormal.startAutoplay()

                callback()

        event.stopPropagation()

    # 取消全屏函数
    cancel_full_screen = ( event )->

        if _is_full_screen

            _is_full_screen = false

            albumNormal.stopAutoplay()

            _main_container.removeClass 'fullscreen'

            _main_container.hide()
            _main_container.fadeIn _fade_speed
            _album_full_screen_btn_container.fadeIn _fade_speed
            _album_thumbs_container.fadeIn _fade_speed

        event.stopPropagation()

    # 全屏函数的回调函数
    invoke_full_screen_callback = ()->
        unbind_img_click_event()
        bind_fullscreen_click_event()

    # 调用全屏函数
    fullscreen_caller = ( event )->

        invoke_full_screen event, invoke_full_screen_callback

    # 调用取消全屏函数
    fullscreen_click_event = ( event )->

        cancel_full_screen event
        bind_img_click_event()
        unbind_fullscreen_click_event()

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

        $(document).on 'click', '.fullscreen', fullscreen_click_event

    # 取消全局绑定事件
    unbind_fullscreen_click_event = ()->

        $(document).off 'click', '.fullscreen'

    # 初始化绑定事件
    bind_img_click_event()
    bind_play_btn_click_event()