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
<div class="swiper-container album-thumbs-container" id="album-thumbs-container">
</div>
@stop

@section( 'content' )
<div class="swiper-container img-container album-normal-container" id="album-normal-container">
</div>
<input type="hidden" id="album_id" name="album_id" value="{{ Input::get( 'album_id' ) }}">
@stop

@section( 'navigation' )
<div class="album-fullscreen-play-btn-container">
    <div class="album-fullscreen-play-btn">
        <img src="/images/icon/play.png" class="album-fullscreen-play-btn-img">
    </div>
</div>
@stop
