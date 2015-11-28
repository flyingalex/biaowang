@extends( 'wechat.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/wechat/css/pages/album.css">
@stop

@section( 'content' )
<div class="section-wrap">
    <div class="section-content">
        <div class="section-link">
            <a href="/wechat/album" class="section-column-title">标王相册</a>
            <a href="/wechat/video" class="section-column-title">标王视频</a>
        </div>
        <div class="section-list">
            @if( isset( $albums ) )
            @foreach( $albums as $album )
                <a href="/wechat/photos?album_id={{ $album->id }}" class="section-column-item">
                    <div class="section-column-img-wrap">
                        <img src="{{$album->image_url}}" class="section-column-img">
                    </div>
                    <div class="section-column-info">
                        <div class="section-column-info-item-message">{{$album->title}}</div>
                    </div>
                </a>
            @endforeach
            @endif

            @if( isset( $videos ) )
            @foreach( $videos as $video )
                <a href="{{$video->url}}" class="section-column-item">
                    <div class="section-column-img-wrap">
                        <img src="{{$video->image_url}}" class="section-column-img">
                    </div>
                    <div class="section-column-info">
                        <div class="section-column-info-item-message">{{$video->title}}</div>
                    </div>
                </a>
            @endforeach
            @endif
        </div>
    </div>
</div>
@stop

@section('navigation')
@stop