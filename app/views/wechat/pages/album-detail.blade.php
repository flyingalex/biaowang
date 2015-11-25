@extends( 'wechat.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/wechat/css/pages/album-detail.css">
@stop

@section( 'scripts' )
<script type="text/javascript" src="/lib/scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/lib/scripts/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/dist/wechat/js/pages/album-detail.js"></script>
@stop

@section( 'advert' )
@stop

@section( 'navigation' )
@stop

@section( 'header' )
<div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="/images/test/test1.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/test/test3.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/test/test3.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/test/test4.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/test/test5.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/test/test6.jpg" alt=""></div>
    </div>
</div>
@stop

@section( 'content' )
<div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="/images/test/test1.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/test/test3.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/test/test3.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/test/test4.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/test/test5.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/test/test6.jpg" alt=""></div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
</div>
@stop