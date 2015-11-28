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
<div class="swiper-container album-normal-container">
    <div class="swiper-wrapper album-normal-wrap">
        @if( isset( $photos ) )
            @foreach( $photos as $photo )
        <div class="swiper-slide album-normal-item">
            <img src="{{$photo->image_url}}" alt="{{$photo->title}}" class="album-normal">
        </div>    
            @endforeach
        @endif
    </div>
</div>
@stop

@section( 'navigation' )
<div class="album-play-btn-container">
    <div class="album-play-btn">
        <img src="/images/icon/play.png" class="album-play-btn-img">
    </div>
</div>
@stop