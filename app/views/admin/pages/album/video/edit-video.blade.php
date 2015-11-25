@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 视频编辑 start -->
<div class="edit-area-container vedio-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">视频</h3>
</div>

<form action="" class="edit-area-form">

<ul class="edit-area-body">
    
    @if( isset( $video ) )
    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input type="text" class="edit-area-input" value="{{$video->title}}">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">栏目</label>
        <input type="text" class="edit-area-input" value="标王视频">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">链接</label>
        <input type="text" class="edit-area-input" value="{{$video->url}}">
    </li>
    
    <li class="edit-area-picture-row">
        <label class="edit-area-label">封面照片</label>
        <div class="picture-wrap">
            <div class="picture-mask"></div>
            <img src="{{$video->image_url}}" class="thumbnail">
        </div>
    </li>
    @endif

    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

</div>
<!-- 视频编辑 end -->

@stop

@section( 'scripts' )
@parent
@stop