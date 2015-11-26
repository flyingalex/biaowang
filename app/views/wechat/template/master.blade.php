<!DOCTYPE html>
<html lang="zh-CN">

<head>

<title>标王</title>

<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="format-detection" content="telephone=no,email=no">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>

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

<hr class="split-line">

@section( 'content' )
@show

<hr class="split-line">

</div>
<!-- main end -->

@section( 'navigation' )
@show

@section( 'scripts' )
<script type="text/javascript" src="/lib/scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/lib/scripts/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/dist/wechat/js/component.js"></script>
@show

</body>

</html>