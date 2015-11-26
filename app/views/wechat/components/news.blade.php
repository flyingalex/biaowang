<div class="news-container">
    @if( isset( $adverts ) )
        @foreach( $adverts as $advert )
    <div class="news-item">
        <img src="{{$advert->image_url}}" class="news-icon">
        <span class="news-content">{{$advert->title}}</span>
    </div>
        @endforeach
    @endif
</div>