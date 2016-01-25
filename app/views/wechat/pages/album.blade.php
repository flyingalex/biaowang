@extends( 'wechat.template.master' )

@section( 'title' )
标王众筹 - 活动相册
@stop

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/wechat/css/pages/album.css">
@stop

@section( 'scripts' )
@parent
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" src="/lib/scripts/lodash.min.js"></script>
<script type="text/javascript" src="/dist/wechat/js/pages/album.js"></script>
@stop

@section( 'content' )

<hr class="split-line">

<div class="section-wrap">
    <div class="section-content">
        <div class="section-link">
            <a href="/wechat/album" class="section-column-title">活动相册</a><!--
         --><a href="/wechat/video" class="section-column-title">活动相册</a>
        </div>
        <div class="section-list">
            @if( isset( $items ) )
            <div class="section-left-column">
            @for( $i = 0, $length = count($items); $i < $length; $i += 2 )
                <a href="{{ $items[$i]->url }}" class="section-column-item">
                    <div class="section-column-img-wrap">
                        <img src="{{$items[$i]->image_url}}" class="section-column-img">
                    </div>
                    <div class="section-column-info">
                        <div class="section-column-info-item-message">{{$items[$i]->title}}</div>
                    </div>
                </a>
            @endfor
            </div><!--
         --><div class="section-right-column">
            @for($i = 1, $length = count($items); $i < $length; $i += 2)
                <a href="{{ $items[$i]->url }}" class="section-column-item">
                    <div class="section-column-img-wrap">
                        <img src="{{$items[$i]->image_url}}" class="section-column-img">
                    </div>
                    <div class="section-column-info">
                        <div class="section-column-info-item-message">{{$items[$i]->title}}</div>
                    </div>
                </a>
            @endfor
            </div>
            @endif
        </div>
    </div>
</div>

<script type="text/template" id="section-item-template">
    <a href="<%- url %>" class="section-column-item">
        <div class="section-column-img-wrap">
            <img src="<%- image_url %>" class="section-column-img">
        </div>
        <div class="section-column-info">
            <div class="section-column-info-item-message"><%- title %></div>
        </div>
    </a>
</script>

<script type="text/template" id="wechat-sign-info">
    <?php json_encode($sign_package) ?>
</script>

<script type="text/javascript" id="wechat-on-menu-share-timeline-info">
    {
        "title": "微相册",
        "link": "{{ Request::url() }}",
        "imgUrl": "{{ $adverts[0]->image_url }}"
    }
</script>

<script type="text/javascript" id="wechat-on-menu-share-app-message-info">
    {
        "title": "微相册",
        "desc": "标王众筹活动  精彩回顾",
        "link": "{{ Request::url() }}",
        "imgUrl": "{{ $adverts[0]->image_url }}",
        "type": "link",
    }
</script>

<input id="app-id" type="hidden" name="app_id" value="{{ $app_id }}">
@stop

@section('navigation')

@include( 'wechat.components.pagination', [
    'url'           =>      $paginate_url,
    'parameters'    =>      []
])

@stop
