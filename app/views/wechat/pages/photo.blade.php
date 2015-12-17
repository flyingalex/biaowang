@extends( 'wechat.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/wechat/css/pages/photo.css">
@stop

@section( 'scripts' )
@parent
<script type="text/javascript" src="/lib/scripts/react.js"></script>
<script type="text/javascript" src="/dist/wechat/js/pages/photo.js"></script>
@stop

@section( 'advert' )
@stop

@section( 'header' )
<div class="swiper-container album-thumbs-container" id="album-thumbs-container"><!--
    <div class="swiper-wrapper album-thumbs-wrap">
        <div class="swiper-slide album-thumbs-item">
        </div>
    </div>
    -->
</div>
@stop

@section( 'content' )
<div class="swiper-container img-container album-normal-container" id="album-normal-container"><!--
    <div class="swiper-wrapper album-normal-wrap">
        <div class="swiper-slide album-normal-item">
            <span class="img-vertical-middle-helper"></span>
        </div>    
    </div>
    -->
</div>
@stop

@section( 'navigation' )
<div class="album-fullscreen-play-btn-container">
    <div class="album-fullscreen-play-btn">
        <img src="/images/icon/play.png" class="album-fullscreen-play-btn-img">
    </div>
</div>
@stop
