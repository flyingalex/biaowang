@extends( 'wechat.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/wechat/css/pages/photos.css">
@stop

@section( 'scripts' )
<script type="text/javascript" src="/lib/scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/lib/scripts/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/dist/wechat/js/pages/video.js"></script>
@stop

@section( 'advert' )
@stop

@section( 'navigation' )
@stop

@section( 'header' )
<div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
        @if( isset( $photos ) )
            @foreach( $photos as $photo )
        <div class="swiper-slide"><img src="{{$photo->image_url}}" alt=""></div>
            @endforeach
        @endif
    </div>
</div>
@stop

@section( 'content' )
<div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
         @if( isset( $photos ) )
            @foreach( $photos as $photo )
        <div class="swiper-slide"><img src="{{$photo->image_url}}" alt="{{$photo->title}}"></div>
            @endforeach
        @endif
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
</div>
@stop