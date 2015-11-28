
$ ()->

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
        # pagination: '.swiper-pagination'
        slidesPerView: 5
        spaceBetween: 10
        centeredSlides: true
        slidesPerView: 'auto'
        #autoplay: 2500              # 自动播放
        # preloadImages: false        # 图片延迟加载
        # lazyLoading: true           # 图片延迟加载
    }

    albumNormal = new Swiper '.album-normal-container', {
        spaceBetween: 15
    }

    albumNormal.params.control = albumThumbs
    albumThumbs.params.control = albumNormal
