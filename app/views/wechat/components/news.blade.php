<div class="swiper-container news-container">
    <div class="swiper-wrapper">
        @if( isset( $news ) )
            @foreach( $news as $new )
        <div class="news-item swiper-slide">
            <img src="/images/icon/news.png" class="news-icon">
            <span class="news-content">新闻：{{$new->content}}</span>
        </div>
            @endforeach
        @endif
    </div>
</div>