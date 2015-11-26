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
            <div class="section-column-item">
                <div class="section-column-img-wrap">
                    <img src="/images/test/test2.jpeg" class="section-column-img">
                </div>
                <div class="section-column-info">
                    <div class="section-column-info-item-message">最新优惠活动</div>
                </div>
            </div>
            <div class="section-column-item">
                <div class="section-column-img-wrap">
                    <img src="/images/test/test2.jpeg" class="section-column-img">
                </div>
                <div class="section-column-info">
                    <div class="section-column-info-item-message">最新优惠活动</div>
                </div>
            </div>
        </div>
        <div class="section-column">
            <h2 class="section-column-title">标王视频</h2>
            <div class="section-column-item">
                <div class="section-column-img-wrap">
                    <img src="/images/test/test3.jpg" class="section-column-img">
                </div>
                <div class="section-column-info">
                    <div class="section-column-info-item-message">最新优惠活动</div>
                </div>
            </div>
            <div class="section-column-item">
                <div class="section-column-img-wrap">
                    <img src="/images/test/test3.jpg" class="section-column-img">
                </div>
                <div class="section-column-info">
                    <div class="section-column-info-item-message">最新优惠活动</div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('navigation')
@stop