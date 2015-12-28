<!DOCTYPE html>
<html lang="zh-CN">

<head>

<title>
@section( 'title' )
标王
@show
</title>

<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="format-detection" content="telephone=no,email=no">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

@section( 'meta-description' )
@show

<script src="/lib/scripts/tb-flexible.js"></script>

@section( 'styles' )
<link rel="stylesheet" href="/dist/wechat/css/common.css">
<link rel="stylesheet" href="/lib/styles/swiper.min.css">
@show

</head>

<body>

<!-- header start -->
@section( 'header' )
@include( 'wechat.components.header' )
@show
<!-- header end -->

<!-- news start -->
@section( 'news' )
@show
<!-- news end -->

<!-- advert start -->
@section( 'advert' )
@include( 'wechat.components.advert' )
@show
<!-- advert end -->

<!-- main start -->
<div class="main">

@section( 'content' )
@show

</div>
<!-- main end -->

@section( 'navigation' )
@show

@section( 'scripts' )
<script type="text/javascript" src="/lib/scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/lib/scripts/swiper.jquery.min.js"></script>
@show

</body>

</html>
