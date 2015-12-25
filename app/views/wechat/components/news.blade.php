<div class="swiper-container news-container">
    <div class="news-icon-wrap">
        <img src="/images/icon/video.png" class="news-icon">
    </div>
    <div class="swiper-wrapper news-wrapper">
        @foreach( $videos as $video)
        <a class="news-item swiper-slide" href="{{$video->url}}">
            <span class="news-content">{{$video->title}}</span>
        </a>
        @endforeach
    </div>
</div>
