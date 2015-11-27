
$ ()->

    _fade_speed = 500

    _main_container = $ '.main'
    _album_thumbs_container = $ '.album-thumbs-container'
    _album_normal_container = $ '.album-normal-container'
    _album_full_screen_btn  = $ '.album-fullscreen-play-btn'
    _album_full_screen_btn_container = $ '.album-fullscreen-play-btn-container'

    # 动态调整图片高度，
    # 使高度大于宽度的图片在水平方向上对齐，同时保持原图片比例
    $( '.album-thumbs-img' ).one 'load', ()->
        _this = $ this

        if _this.width() > _this.height()
            _this.height '100%'
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
        autoplay: 3000
        spaceBetween: 15
    }

    albumNormal.stopAutoplay()
    albumNormal.params.control = albumThumbs
    albumThumbs.params.control = albumNormal
    
    _album_full_screen_btn.on 'click', ( event )->

        _main_container.addClass 'fullscreen'
        _main_container.hide()

        _album_thumbs_container.fadeOut _fade_speed
        _album_full_screen_btn_container.fadeOut _fade_speed, ()->
            _main_container.show()

        albumNormal.startAutoplay()

    $(document).on 'click', '.fullscreen', ( event )->

        albumNormal.stopAutoplay()

        _main_container.removeClass 'fullscreen'

        _main_container.hide()
        _main_container.fadeIn _fade_speed
        _album_full_screen_btn_container.fadeIn _fade_speed
        _album_thumbs_container.fadeIn _fade_speed