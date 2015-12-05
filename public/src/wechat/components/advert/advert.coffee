
_slide_speed = 500
_advert_title_list = null
_advert_title_current = null

slide_change_end_event =  ( swiper )->

    _advert_title_current.text _advert_title_list[ swiper.activeIndex ].value

init = ()->
    
    advert_swiper = new Swiper '.advert-container', {
        speed: _slide_speed                                     # 滑动速度
        direction: 'horizontal'                                 # 水平显示
        preloadImages: false                                    # 图片延迟加载
        lazyLoading: true                                       # 图片延迟加载
        autoplay: 2500                                          # 自动播放
        autoplayDisableOnInteraction: true                      # 交互时候不自动播放
        pagination: '.swiper-pagination',                       # 分页
        paginationClickable: true                               # 分页组件可点击
        onSlideChangeEnd: slide_change_end_event                # 滑动结束触发事件
    }

    _advert_title_current = $ '#advert-title-current'
    _advert_title_list = $( '#advert-title-list' ).serializeArray()

module.exports =

    init: init