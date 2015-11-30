@if ( isset( $adverts ) )
<div class="advert-container swiper-container">
    <div class="advert-list swiper-wrapper">
        
        @foreach( $adverts as $advert )
        <div class="advert-item swiper-slide">
            <a href="{{$advert->url}}" class="advert-link">
                <img data-src="{{$advert->image_url}}" class="advert-img swiper-lazy">
            </a>
        </div>
        @endforeach
    </div>

    <div class="swiper-pagination advert-pagination"></div>

    <div class="advert-title-wrap">
        
        <form class="advert-title-list" id="advert-title-list">
            @foreach ( $adverts as $advert )
            <input type="hidden" class="advert-title-val" name="title" value="{{ $advert->title }}">
            @endforeach
        </form>
        <div class="advert-title-mask"></div>
        <div class="advert-title-current" id="advert-title-current">
            @if ( count( $adverts ) )
                {{ $adverts[0]->title }}
            @endif
        </div>
    </div>
</div>
@endif