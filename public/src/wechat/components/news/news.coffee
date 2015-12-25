
init = ()->
    
    slider = new Swiper '.news-container', {
        direction: 'vertical'
        autoplay: 2500
    }

module.exports =

    init: init
