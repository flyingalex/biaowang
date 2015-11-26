<div class="news-container">
    @if( isset( $news ) )
        @foreach( $news as $new )
    <div class="news-item">
        <img src="/images/icon/news.png" class="news-icon">
        <span class="news-content">{{$new->content}}</span>
    </div>
        @endforeach
    @endif
</div>