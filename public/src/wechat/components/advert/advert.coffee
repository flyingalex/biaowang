
$ ()->
    
    swiper = new Swiper '.advert-container', {
        direction: 'horizontal'     # 水平显示
        autoplay: 2500              # 自动播放
        preloadImages: false        # 图片延迟加载
        lazyLoading: true           # 图片延迟加载
    }