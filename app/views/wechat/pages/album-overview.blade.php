@extends( 'wechat.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/wechat/css/pages/album-overview.css">
@stop

@section( 'content' )
<div class="section-wrap">
    <div class="section-header">
        <img src="/images/resource-title.png">
    </div>
    <div class="section-content">
        <div class="section-column section-column-left">
            <h2 class="section-column-title">标王相册</h2>
            @if( isset( $albums ) )
            @foreach( $albums as $album )
                <a href="{{ $album->id }}" class="section-column-item">
                    <div class="section-column-img-wrap">
                        <img src="{{$album->image_url}}" class="section-column-img">
                    </div>
                    <div class="section-column-info">
                        <div class="section-column-info-item-message">{{$album->title}}</div>
                    </div>
                </a>
            @endforeach
            @endif
        </div>
        <div class="section-column">
            <h2 class="section-column-title">标王视频</h2>
         @if( isset( $videos ) )
            @foreach( $videos as $video )
                <a href="{{ $video->id }}" class="section-column-item">
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