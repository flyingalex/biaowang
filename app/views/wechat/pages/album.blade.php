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
                <div class="section-left-column">
                <?php for($i = 0, $length = count($albums); $i < $length; $i ++) { ?>
                    <?php if($i % 2 == 0) { ?>
                        <a href="/wechat/photos?album_id={{ $albums[$i]->id }}" class="section-column-item">
                            <div class="section-column-img-wrap">
                                <img src="{{$albums[$i]->image_url}}" class="section-column-img">
                            </div>
                            <div class="section-column-info">
                                <div class="section-column-info-item-message">{{$albums[$i]->title}}</div>
                            </div>
                        </a>
                    <?php } ?>
                <?php } ?>
                </div>
                <div class="section-right-column">
                <?php for($i = 0, $length = count($albums); $i < $length; $i ++) { ?>
                    <?php if($i % 2 != 0) { ?>
                        <a href="/wechat/photos?album_id={{ $albums[$i]->id }}" class="section-column-item">
                            <div class="section-column-img-wrap">
                                <img src="{{$albums[$i]->image_url}}" class="section-column-img">
                            </div>
                            <div class="section-column-info">
                                <div class="section-column-info-item-message">{{$albums[$i]->title}}</div>
                            </div>
                        </a>
                    <?php } ?>
                <?php } ?>
                </div>
            @endif

            @if( isset( $videos ) )
            <div class="section-left-column">
                <?php for($i = 0, $length = count($videos); $i < $length; $i ++) { ?>
                    <?php if($i % 2 == 0) { ?>
                        <a href="{{$videos[$i]->url}}" class="section-column-item">
                            <div class="section-column-img-wrap">
                                <img src="{{$videos[$i]->image_url}}" class="section-column-img">
                            </div>
                            <div class="section-column-info">
                                <div class="section-column-info-item-message">{{$videos[$i]->title}}</div>
                            </div>
                        </a>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="section-right-column">
                <?php for($i = 0, $length = count($videos); $i < $length; $i ++) { ?>
                    <?php if($i % 2 != 0) { ?>
                        <a href="{{$videos[$i]->url}}" class="section-column-item">
                            <div class="section-column-img-wrap">
                                <img src="{{$videos[$i]->image_url}}" class="section-column-img">
                            </div>
                            <div class="section-column-info">
                                <div class="section-column-info-item-message">{{$videos[$i]->title}}</div>
                            </div>
                        </a>
                    <?php } ?>
                <?php } ?>
            </div>
            @endif
        </div>
    </div>
</div>
@stop

@section('navigation')
@stop