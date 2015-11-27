@extends( 'wechat.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/wechat/css/pages/photo.css">
@stop

@section( 'scripts' )
@parent
<script type="text/javascript" src="/dist/wechat/js/pages/photo.js"></script>
@stop

@section( 'advert' )
@stop

@section( 'header' )
<div class="swiper-container album-thumbs-container">
    <div class="swiper-wrapper album-thumbs-wrap">
        @if( isset( $photos ) )
            @foreach( $photos as $photo )
        <div class="swiper-slide album-thumbs-item">
            <img src="{{$photo->image_url}}" alt="{{$photo->title}}" class="album-thumbs-img">
        </div>
            @endforeach
        @endif
    </div>
</div>
@stop

@section( 'content' )
<div class="swiper-container img-container album-normal-container">
    <div class="swiper-wrapper album-normal-wrap">
        @if( isset( $photos ) )
            @foreach( $photos as $photo )
        <div class="swiper-slide album-normal-item">
            <span class="img-vertical-middle-helper"></span>
            <img src="{{$photo->image_url}}" alt="{{$photo->title}}" class="album-normal-img img-to-vertical-middle">
        </div>    
            @endforeach
        @endif
    </div>
</div>
@stop

@section( 'navigation' )
<div class="album-fullscreen-play-btn-container">
    <div class="album-fullscreen-play-btn">
        <img src="/images/icon/play.png" class="album-fullscreen-play-btn-img">
    </div>
</div>
@stop