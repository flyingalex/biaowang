<!DOCTYPE html>
<html lang="zh-CN">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>标王 --- 后台管理系统</title>

@section( 'styles' )
<link rel="stylesheet" href="/dist/admin/css/common.css">
<link rel="stylesheet" href="/dist/admin/css/component.css">
@show

</head>

<body>

<div class="wrapper clearfix">

<!-- 侧边栏 start -->
@section( 'sidebar' )
@include( 'admin.components.sidebar' )
@show
<!-- 侧边栏 end -->

<!-- 右边主模块 start -->
<div class="main">

<!-- 头部logo start -->
@section( 'header' )
@include( 'admin.components.header' )
@show
<!-- 头部logo end -->

<!-- 编辑主模块 start -->
@section( 'content' )
@include( 'admin.components.content')
@show
<!-- 编辑主模块 end -->

</div>
<!-- 右边主模块 end -->

</div>

@section( 'scripts' )
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
@show

</body>

</html>