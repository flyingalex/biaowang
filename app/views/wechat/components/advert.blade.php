
<div class="advert-container swiper-container">
    <div class="advert-list swiper-wrapper">
        
        @if( isset( $avderts ) )
            @foreach( $avderts as $advert )
        <div class="advert-item swiper-slide">
            <a href="{{$advert->url}}" class="advert-link">
                <img src="{{$advert->image_url}}" class="advert-img">
            </a>
            <div class="advert-title-wrap">
                <div class="advert-title-mask"></div>
                <div class="advert-title-content">{{$advert->title}}</div>
            </div>
        </div>
            @endforeach
        @endif
    </div>

>
</div>